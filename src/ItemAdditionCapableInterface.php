<?php

namespace Dhii\Collection;

/**
 * Something that can have items added.
 *
 * @since [*next-version*]
 */
interface ItemAdditionCapableInterface
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
    public function addItem($item);

    /**
     * Adds multiple items.
     *
     * @param mixed[]|\Traversable $items A list of items to add.
     *
     * @since [*next-version*]
     *
     * @return bool True if items have been added; false otherwise.
     */
    public function addItems($items);
}
