<?php

namespace Dhii\Collection;

/**
 * Something that can have items removed.
 *
 * @since [*next-version*]
 */
interface ItemRemovalCapableInterface
{
    /**
     * Removes an item.
     *
     * @param mixed $item The item to remove.
     *
     * @since [*next-version*]
     *
     * @return bool True if item has been removed; false otherwise.
     */
    public function removeitem($item);
}
