<?php

namespace Dhii\Collection;

/**
 * Something that can check whether it has a key.
 *
 * @since [*next-version*]
 */
interface CheckCapableCollectionInterface extends CollectionInterface
{
    /**
     * Checks whether this instance contains an item with the given key.
     *
     * @since [*next-version*]
     *
     * @param string|int $key The key to check for.
     *
     * @return bool True if an item witht he specified key exists in this instance; false otherwise.
     */
    public function has($key);
}
