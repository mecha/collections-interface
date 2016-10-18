<?php

namespace Dhii\Collection;

/**
 * A set, items for which can be checked and added, but not retrieved or removed.
 *
 * @since [*next-version*]
 */
interface WritableSetInterface extends CollectionInterface
{
    /**
     * Adds an item to the set.
     *
     * Item must be unique.
     * If item is scalar, uniqueness is determined based on its value.
     * If item is an object, multiple identical objects may be added, but not
     * the same object multiple times.
     *
     * @since [*next-version*]
     *
     * @return bool True if item was added; false otherwise.
     */
    public function add($item);

    /**
     * Adds multiple items to the set.
     *
     * Each item must be unique. See {@see add()} for explanation of uniqueness.
     * If the same value is encountered multiple times, it will be silently
     * skipped during subsequent attempts to be added.
     *
     * @since [*next-version*]
     *
     * @param mixed[]|\Traversable A list of items to add.
     *
     * @return bool True if all items were added; false if at least one of the items was not added.
     */
    public function addMany($items);
}
