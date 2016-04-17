<?php

namespace Nuclear\Support\Facades;

/**
 * @see \Nuclear\Contracts\Routing\ResponseFactory
 */
class Response extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Nuclear\Contracts\Routing\ResponseFactory';
    }
}
