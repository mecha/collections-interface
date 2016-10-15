<?php

namespace Dhii\Collection;

/**
 * A collection, to which items can be added.
 *
 * @since [*next-version*]
 */
interface WriteableCollectionInterface
{
    /**
     * Adds an item.
     *
     * @param mixed $item An item to add.
     *
     * @since [*next-version*]
     *
     * @return bool True if item has been added; false otherwise.
     */
    public function add($item);

    /**
     * Adds multiple items.
     *
     * @param mixed[]|\Traversable $items A list of items to add.
     *
     * @since [*next-version*]
     *
     * @return bool True if items have been added; false otherwise.
     */
    public function addMany($items);
}
