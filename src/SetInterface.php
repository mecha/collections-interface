<?php

namespace Dhii\Collection;

/**
 * Something that can behave as a set with complete functionality.
 *
 * @since [*next-version*]
 */
interface SetInterface extends \Countable
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
     * @param mixed[]|\Traversable $values A list of items to add.
     *
     * @since [*next-version*]
     *
     * @return bool True if items have been added; false otherwise.
     */
    public function addMany($values);

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

    /**
     * Clears all items of this collection.
     *
     * @since [*next-version*]
     */
    public function clear();

    /**
     * Retrieve the items of the collection.
     *
     * This method may return an array. However, this is not a reliable way to convert a collection
     * to an array. For that purpose, use {@see iterator_to_array()}.
     *
     * @since [*next-version*]
     *
     * @return mixed[]|\Traversable The list of items, by original key.
     */
    public function items();
}
