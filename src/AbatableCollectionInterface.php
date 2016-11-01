<?php

namespace Dhii\Collection;

/**
 * A collection, which can have items removed, and their count retrieved.
 *
 * @since [*next-version*]
 */
interface AbatableCollectionInterface extends
    CountableCollectionInterface,
    ReducibleCollectionInterface
{
}
