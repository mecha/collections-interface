<?php

namespace Dhii\Collection;

use Iterator;

/**
 * Something that can act as a callback iterator.
 *
 * A callback iterator is something that returns items processed by a callback.
 *
 * @since [*next-version*]
 */
interface CallbackIteratorInterface extends Iterator
{
    /**
     * Retrieves the callback that this iterator will apply to each element.
     *
     * The callback will be called with 2 parameters:
     *  1. The key of the current item;
     *  2. The current item;
     *  3. The reference to the $isContinue pointer, which, if set to false, will cause the loop to terminate.
     *
     * @since [*next-version*]
     *
     * @return callable The callback of this iterator.
     */
    public function getCallback();

    /**
     * Return the current element after applying the callback to it.
     *
     * @see getCallback()
     * @since [*next-version*]
     */
    public function current();
}
