<?php

namespace Nuclear\Support\Facades;

/**
 * @see \Nuclear\Auth\AuthManager
 * @see \Nuclear\Contracts\Auth\Factory
 * @see \Nuclear\Contracts\Auth\Guard
 * @see \Nuclear\Contracts\Auth\StatefulGuard
 */
class Auth extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'auth';
    }
}
