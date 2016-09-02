<?php

namespace Dhii\Collection;

use Iterator;

/**
 * Something that can act as a callback iterator.
 *
 * A callback iterator is something that returns items processed by a callback.
 * The {@see current()} method MUST return the result of applying the callback
 * to the current item.
 * See {@see getCallback()} for defails about the callback.
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
}