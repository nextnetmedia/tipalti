<?php

namespace Nextnetmedia\Tipalti\Authentication;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Exception;
use ReflectionClass;

/**
 * This class generates the encryption key required for Tipalti API calls; it uses the annotations on Command classes supplied by the EAT class, as well as logic to determine the proper key format based on Tipalti's docs.
 */
class EncryptionKey {

  /**
   * @param string $className
   * @param array $args
   * @param string $apiKey
   *
   * @return string
   * @throws Exception
   */
  public static function generate($className, array $args, $apiKey) {
    if(!isset($args['payerName'])) throw new Exception("You must specify a payerName");
    if(!isset($args['timestamp'])) throw new Exception("You must specify a timestamp");

    $value = "";
    AnnotationRegistry::registerLoader('class_exists');
    $reader = new AnnotationReader();

    // First, check if we need to look at a nested item for the EAT
    $nestedAnnotation = $reader->getClassAnnotation(new ReflectionClass($className), NestedEAT::class);
    if($nestedAnnotation && !empty($nestedAnnotation->childItem) && isset($args[$nestedAnnotation->childItem]) && is_object($args[$nestedAnnotation->childItem])) {
      // We have a nested EAT, try to load it, which can be frustrating because the nested object needs to be inspected using getters
      $annotation = $reader->getClassAnnotation(new ReflectionClass(get_class($args[$nestedAnnotation->childItem])),EAT::class);

      if($annotation && ($annotation->eatParameter)) {
        foreach ($annotation->eatParameter as $av) {
          if(method_exists($args[$nestedAnnotation->childItem],"get".$av)) $value = $args[$nestedAnnotation->childItem]->{"get".$av}();
          else $value = empty($args[$nestedAnnotation->childItem]->{$av}) ? null : $args[$nestedAnnotation->childItem]->{$av};
          if(!empty($value)) break;
        }
      } else {

          if(method_exists($args[$nestedAnnotation->childItem],"get".$annotation->eatParameter)) $value = $args[$nestedAnnotation->childItem]->{"get".$annotation->eatParameter}();
          else $value = empty($args[$nestedAnnotation->childItem]->{$annotation->eatParameter}) ? null : $args[$nestedAnnotation->childItem]->{$annotation->eatParameter};
      }
    } else {
      // Try to see if we got a normal annotation we can use to determine the EAT
      $annotation = $reader->getClassAnnotation(new ReflectionClass($className), EAT::class);
      if($annotation && is_array($annotation->eatParameter)) {
        foreach($annotation->eatParameter as $av) {
          $value = ($annotation && !empty($args[$av])) ? $args[$av] : null;
          if(!empty($value)) continue;
        }
      } else {
        $value = ($annotation && !empty($args[$annotation->eatParameter])) ? $args[$annotation->eatParameter] : null;
      }
    }
    if($annotation && !empty($value)) {

      // We have an annotation, with a EAT parameter specified in the input array, so we should use it
      // If the EAT is the idap, use the special idap format
      if(is_array($annotation->eatParameter)) {
        foreach ($annotation->eatParameter as $av) {
          if($av == "idap" && !empty($args['idap'])) return self::generateHmac([$args['payerName'],$args['idap'],$args['timestamp']], $apiKey);
          if($av == "Idap" && !empty($args['Idap'])) return self::generateHmac([$args['payerName'],$args['Idap'],$args['timestamp']], $apiKey);
        }
      } elseif($annotation->eatParameter == "idap" && !empty($args['idap'])) {
        return self::generateHmac([$args['payerName'], $args['idap'], $args['timestamp']], $apiKey);
      } elseif($annotation->eatParameter == "Idap" && !empty($args['Idap'])) {
        return self::generateHmac([$args['payerName'], $args['Idap'], $args['timestamp']], $apiKey);
      }

      // Otherwise use the EAT format
      return self::generateHmac([$args['payerName'],$args['timestamp'],$value], $apiKey);

    } elseif($annotation && empty($value)) {

      // We have an annotation, but the EAT parameter wasn't supplied so we cannot continue.
      $requiredParams = is_array($annotation->eatParameter) ? implode(" or ", $annotation->eatParameter) : $annotation->eatParameter;
      throw new Exception("Cannot calculate encryption key without parameter ".$requiredParams);

    }

    if(!empty($args['idap'])){
      // We didn't have an annotation, but we do have an idap parameter so we know we should use that instead of an EAT parameter
      return self::generateHmac([$args['payerName'],$args['idap'],$args['timestamp']], $apiKey);
    }
    if(!empty($args['Idap'])){
      // We didn't have an annotation, but we do have an idap parameter so we know we should use that instead of an EAT parameter
      return self::generateHmac([$args['payerName'],$args['Idap'],$args['timestamp']], $apiKey);
    }

    // If we can't detect an EAT or nested EAT parameter, and we don't have an idap, just return the payerName and timestamp
    return self::generateHmac([$args['payerName'],$args['timestamp']], $apiKey);
  }

  /**
   *
   * Helper function to generate a sha256 HMAC as needed by most API calls
   *
   * @param array|string $input
   *
   * @return string
   *
   */
  public static function generateHmac($input, $apiKey) {
    if(is_array($input)) $input = implode("",$input);
    return hash_hmac("sha256",$input,$apiKey);
  }


}
