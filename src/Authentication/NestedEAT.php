<?php

namespace Nextnetmedia\Tipalti\Authentication;

/**
 *
 * This class lets us notate how to get the EAT Parameter for a class (since they are not set automatically in the WSDL and are poorly documented)
 *
 * This class is different from the EAT in that it allows for specifying a child object that contains the required EAT key/value
 *
 * @Annotation
 * @Target("CLASS")
 */
final class NestedEAT
{
    /**
     * @var string
     */
    public $childItem;
}
