<?php

namespace Nuclear\Support\Facades;

/**
 * @see \Nuclear\Cache\CacheManager
 * @see \Nuclear\Cache\Repository
 */
class Cache extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cache';
    }
}
