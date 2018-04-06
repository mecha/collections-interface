<?php

namespace Dhii\Collection;

use RuntimeException;

/**
 * Something that can map an item to a key.
 *
 * @since [*next-version*]
 */
interface MapCapableInterface
{
    /**
     * Maps an item to a key.
     *
     * @since [*next-version*]
     *
     * @param string $key  The key to map the item to.
     * @param mixed  $item The item to map.
     *
     * @throws RuntimeException
     */
    public function map($key, $item);
}
