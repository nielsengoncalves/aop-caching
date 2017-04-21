<?php

namespace AOP_Caching\Core\Annotation;
use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 * @Target("METHOD")
 */
class Cacheable extends Annotation
{
    /**
     * Time to cache (TTL   )
     *
     * @var int
     */
    public $time = 0;
}