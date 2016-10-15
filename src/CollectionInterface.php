<?php

namespace Dhii\Collection;

/**
 * Something that can represent an item collection.
 *
 * @since [*next-version*]
 */
interface CollectionInterface
{
    /**
     * Checks whether this instance contains the given item.
     *
     * @since [*next-version*]
     *
     * @param mixed $item The item to check for.
     *
     * @return bool True if the given item exists in this instance; false otherwise.
     */
    public function contains($item);
}
