<?php

namespace Dhii\Collection;

/**
 * Something that can have items removed by key.
 *
 * @since [*next-version*]
 */
interface UnsetCapableCollectionInterface extends BaseCollectionInterface
{
    /**
     * Removes an item with the specified key.
     *
     * @param string $key The key of an item to remove.
     *
     * @since [*next-version*]
     *
     * @return bool True if item has been removed; false otherwise.
     */
    public function uns($key);

    /**
     * Removes items with the specified keys.
     *
     * If removal of one of the keys fails, continues onto the next.
     *
     * @param string[]|\Traversable $keys The keys of items to remove.
     *
     * @since [*next-version*]
     *
     * @return bool False if one of the items has not been removed; true otherwise.
     */
    public function unsMany($keys);
}
