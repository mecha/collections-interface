<?php

namespace Dhii\Collection;

/**
 * Something that can represent a collection which can have its items removed.
 *
 * @since [*next-version*]
 */
interface RemovalCapableCollectionInterface extends BaseCollectionInterface
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
    public function remove($item);

    /**
     * Removes multiple items.
     *
     * @since [*next-version*]
     *
     * @param mixed[]|\Traversable $items The items to remove
     */
    public function removeMany($items);
}
