<?php

namespace Dhii\Collection;

/**
 * A collection, the items of which can be accessed.
 *
 * @since [*next-version*]
 */
interface ReadableCollectionInterface extends
    AccessibleCollectionInterface,
    GrossCollectionInterface,
    CountableCollectionInterface
{
}
