<?php

namespace Dhii\Collection;

/**
 * Something that can validate item keys.
 *
 * @since [*next-version*]
 */
interface KeyValidateCapableCollection extends CollectionInterface
{
    /**
     * Determines whether the specified key is a valid key for this collection.
     *
     * @since [*next-version*]
     *
     * @param string $key The key to validate.
     */
    public function isValidKey($key);
}
