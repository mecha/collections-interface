<?php

namespace Dhii\Collection;

/**
 * A collection that can have all of its items cleared.
 *
 * @since [*next-version*]
 */
interface ClearableCollectionInterface extends BaseCollectionInterface
{
    /**
     * Clears all items of this collection.
     *
     * @since [*next-version*]
     */
    public function clear();
}
