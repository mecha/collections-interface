<?php

namespace Dhii\Collection;

/**
 * A collection that allows the bulk of the items to be set.
 *
 * @since 0.1.0
 */
interface MutableCollectionInterface extends BaseCollectionInterface
{
    /**
     * Set the items in bulk.
     *
     * The current item set is completely replaced with the given one.
     *
     * @since [*next-version*]
     *
     * @param array|\Traversable $items The items to set for this instance.
     */
    public function setItems($items);
}
