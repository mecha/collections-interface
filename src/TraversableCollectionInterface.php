<?php

namespace Dhii\Collection;

/**
 * Something that represents a collection, the items of which can be traversed in a for-each loop.
 *
 * @since [*next-version*]
 */
interface TraversableCollectionInterface extends
    CollectionInterface,
    \Iterator
{
}
