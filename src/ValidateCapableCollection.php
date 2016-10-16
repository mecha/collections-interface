<?php

namespace Dhii\Collection;

/**
 * Something that can validate items.
 *
 * @since [*next-version*]
 */
interface ValidateCapableCollection extends CollectionInterface
{
    /**
     * Determines whether the given item is a valid member of this collection.
     *
     * @since [*next-version*]
     *
     * @param mixed $item The item to validate.
     */
    public function isValidMember($item);
}
