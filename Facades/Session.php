<?php

namespace Nuclear\Support\Facades;

/**
 * @see \Nuclear\Session\SessionManager
 * @see \Nuclear\Session\Store
 */
class Session extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'session';
    }
}
