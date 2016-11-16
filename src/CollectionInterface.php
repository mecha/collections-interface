<?php

namespace Dhii\Collection;

/**
 * A generic collection, with read and write access, traverse and count capabilities.
 *
 * @since 0.1.0
 */
interface CollectionInterface extends
    ReadableCollectionInterface,
    WritableCollectionInterface,
    TraversableCollectionInterface,
    AbatableCollectionInterface,
    GrowableCollectionInterface
{
}
