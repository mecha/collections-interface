<?php

namespace Dhii\Collection;

/**
 * A collection, the individual items of which can be accessed.
 *
 * @since [*next-version*]
 */
interface ReadableCollectionInterface extends BaseCollectionInterface
{
    /**
     * Retrieves an item with the specified key.
     *
     * @since [*next-version*]
     *
     * @param string|int $key The key of the item to retrieve.
     *
     * @return mixed The item, if key is found; null otherwise.
     */
    public function get($key);
}
