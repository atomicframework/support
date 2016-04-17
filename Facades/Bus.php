<?php

namespace Nuclear\Support\Facades;

/**
 * @see \Nuclear\Contracts\Bus\Dispatcher
 */
class Bus extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Nuclear\Contracts\Bus\Dispatcher';
    }
}
