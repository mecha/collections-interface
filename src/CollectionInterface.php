<?php

namespace Dhii\Collection;

/**
 * A generic collection, with read and write access, traverse and count capabilities.
 *
 * @since [*next-version*]
 */
interface CollectionInterface extends
    ReadableCollectionInterface,
    WritableCollectionInterface,
    TraversableCollectionInterface,
    AbatableCollectionInterface,
    GrowableCollectionInterface
{
}
