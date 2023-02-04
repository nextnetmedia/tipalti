<?php

namespace Nextnetmedia\Tipalti\Authentication;

/**
 *
 * This class lets us notate how to get the EAT Parameter for a class (since they are not set automatically in the WSDL and are poorly documented)
 *
 * @Annotation
 * @Target("CLASS")
 */
final class EAT
{
    /**
     * @var mixed
     */
    public $eatParameter;
}
