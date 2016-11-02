<?php

namespace Dhii\Collection;

/**
 * Something that can represent an item collection.
 *
 * @since [*next-version*]
 */
interface BaseCollectionInterface
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

    /**
     * Determines whether the given item is a valid member of this collection.
     *
     * @since [*next-version*]
     *
     * @param mixed $item The item to validate.
     */
    public function validate($item);
}
