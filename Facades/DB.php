<?php

namespace Nuclear\Support\Facades;

/**
 * @see \Nuclear\Database\DatabaseManager
 * @see \Nuclear\Database\Connection
 */
class DB extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'db';
    }
}
