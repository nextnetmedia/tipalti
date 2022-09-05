<?php

namespace Nextnetmedia\Tipalti\Client;

use Exception;
use HaydenPierce\ClassFinder\ClassFinder;
use Nextnetmedia\Tipalti\Authentication\EncryptionKey;
use Nextnetmedia\Tipalti\Development\AnnotationGenerator;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use SoapClient;
use SoapFault;

class TipaltiClient extends SoapClient
{
  /**
   * @var string
   *
   * The provided API key
   *
   */
  protected $apikey;
  /**
   * @var bool
   *
   * Should we use production URLs? Default to sandbox
   *
   */
  public $production = false;
  /**
   * @var string
   *
   * The provided payer name, required for most API calls (normally your business name)
   *
   */
  public $payerName;

  public $wsdl;
  public $namespace;

  /**
   * @throws SoapFault
   * @throws Exception
   */
  public function __construct($wsdl, $namespace, $apikey, $payerName, $production = false)
    {
      $this->wsdl = $wsdl;
      $this->namespace = $namespace;
      $this->apikey=$apikey;
      $this->payerName=$payerName;
      $this->production=$production;
      $options['features'] = SOAP_SINGLE_ELEMENT_ARRAYS;
      foreach(['Resource','Response', 'Result', 'Exception'] as $namespace) {
        foreach (ClassFinder::getClassesInNamespace(__NAMESPACE__."\\$namespace") as $class) {
          $shortName = trim(str_replace($namespace, '', $class), " \\");
          $options['classmap'][$shortName] = $class;
        }
      }
      parent::__construct($this->wsdl, $options);
    }

  /**
   * @throws ReflectionException
   * @throws Exception
   */
  #[\ReturnTypeWillChange]
  public function __call($name, array $args) {
      $ts = time();
      $class = "\\".trim($this->namespace, "\\")."\\".$name;
      if(class_exists($class)) {
        $reflection = new ReflectionMethod($class,"__construct");
        $classToCall = new ReflectionClass($class);
        $callParams = [];
        $namedParams = [];
        $index = 0;
        $keyPosition = null;
        foreach($reflection->getParameters() as $param) {
          $paramName = $param->getName();
          $position = $param->getPosition();
          if (strtolower($paramName) == 'payername')
            $callParams[$position] = $namedParams[$paramName] = $this->payerName;
          elseif(strtolower($paramName) == 'timestamp')
            $callParams[$position] = $namedParams[$paramName] = $ts;
          elseif(strtolower($paramName) == 'key') {
            $callParams[$position] = "";
            $keyPosition = $position; // calculate the key once everything else is added, as we may need the info supplied after the key
          } else {
            if(!isset($args[$index])) throw new Exception('Must pass '.$paramName.' as argument '.($index+1).' to '.$name);
            $callParams[$position] = $namedParams[$paramName] = $args[$index];
            $index++;
          }
        }
        $callParams[$keyPosition] = EncryptionKey::generate($class,$namedParams,$this->apikey);
        return $this->__soapCall($name,[$classToCall->newInstanceArgs($callParams)]);
      } else {
        throw new Exception('Class does not exist: '.$class);
      }
    }

  public static function generateMethodAnnotations() {
    // Regenerate the annotations for this class to assist with IDE
    echo AnnotationGenerator::generateMethodAnnotations(static::COMMAND_NAMESPACE);
  }

}
