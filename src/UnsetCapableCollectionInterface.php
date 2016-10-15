<?php

namespace Dhii\Collection;

/**
 * Something that can have items removed by key.
 *
 * @since [*next-version*]
 */
interface UnsetCapableCollectionInterface extends CollectionInterface
{
    /**
     * Removes an item with the specified key.
     *
     * @param string|int $key The key of an item to remove.
     *
     * @since [*next-version*]
     *
     * @return bool True if item has been removed; false otherwise.
     */
    public function uns($key);
}
