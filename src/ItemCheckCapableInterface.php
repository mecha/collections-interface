<?php

namespace Dhii\Collection;

/**
 * Something that can check whether it has an item.
 *
 * @since [*next-version*]
 */
interface ItemCheckCapableInterface
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
    public function hasItem($item);
}
