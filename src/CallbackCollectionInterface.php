<?php

namespace Dhii\Collection;

/**
 * A collection that can retrieve a callback iterator for its values.
 *
 * @since [*next-version*]
 */
interface CallbackCollectionInterface extends
    CollectionInterface,
    CallbackIterableInterface
{
}
