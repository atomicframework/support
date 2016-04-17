<?php

namespace Nuclear\Support\Facades;

/**
 * @see \Nuclear\Contracts\Console\Kernel
 */
class Artisan extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Nuclear\Contracts\Console\Kernel';
    }
}
