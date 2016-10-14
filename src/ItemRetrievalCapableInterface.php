<?php

namespace Dhii\Collection;

/**
 * Something that can check whether it has a key.
 *
 * @since [*next-version*]
 */
interface ItemRetrievalCapableInterface
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
    public function getItem($key);
}
