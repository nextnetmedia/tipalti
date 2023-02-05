<?php

namespace Nextnetmedia\Tipalti\Development;

use Exception;
use HaydenPierce\ClassFinder\ClassFinder;
use ReflectionClass;

class AnnotationGenerator
{
    public static function generateMethodAnnotations($namespace)
    {
        if (empty($namespace)) {
            throw new Exception("You must provide a namespace");
        }
//        ClassFinder::disablePSR4Vendors();
        $classes = ClassFinder::getClassesInNamespace($namespace);
        $output = "/**" . PHP_EOL;
        foreach ($classes as $class) {
            $r = new ReflectionClass($class);
            $rp = $r->getConstructor()->getParameters();
            $params = [];
            foreach ($rp as $param) {
                if (in_array(strtolower($param->getName()), ['key','payername','timestamp'])) {
                    continue;
                }
                $params[]="$" . $param->getName();
            }
            $output .= " * @method $class " . $r->getShortName() . "(" . implode(", ", $params) . ")" . PHP_EOL;
        }
        $output .= "**/";
        return $output;
    }
}
