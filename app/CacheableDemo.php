<?php

namespace AOP_Caching\App;

use AOP_Caching\Core\Annotation\Cacheable;

/**
 * Example class to show how to use caching with AOP
 */
class CacheableDemo
{

    /**
     * Returns a report and explicitly cache a result for future use
     *
     * In this example we use "Cacheable" annotation to explicit mark a method
     *
     * @param string $from This can be any value
     * @Cacheable(time=10)
     *
     * @return string
     */
    public function getReport($from)
    {
        // long calculation for 100ms
        sleep(1);
        return $from;
    }
}