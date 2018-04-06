<?php

namespace Dhii\Collection;

use RuntimeException;

/**
 * Something that can have an item added.
 *
 * @since [*next-version*]
 */
interface AddCapableInterface
{
    /**
     * Adds an item to this instance.
     *
     * @since [*next-version*]
     *
     * @throws RuntimeException If the item could not be added.
     */
    public function add();
}
