<?php

namespace Nuclear\Support\Facades;

/**
 * @see \Nuclear\Contracts\Auth\Access\Gate
 */
class Gate extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Nuclear\Contracts\Auth\Access\Gate';
    }
}
