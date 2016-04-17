<?php

namespace Nuclear\Support\Facades;

/**
 * @see \Nuclear\Queue\QueueManager
 * @see \Nuclear\Queue\Queue
 */
class Queue extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'queue';
    }
}
