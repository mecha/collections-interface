<?php

namespace Dhii\Collection;

/**
 * A collection, the item set of which may be manipulated indirectly.
 *
 * @since [*next-version*]
 */
interface WritableCollectionInterface extends
    ExtensibleCollectionInterface,
    ReducibleCollectionInterface,
    MutableCollectionInterface
{
}
