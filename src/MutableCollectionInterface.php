<?php

namespace Dhii\Collection;

/**
 * Something that can act as a collection which can have its item set altered.
 *
 * @since [*next-version*]
 */
interface MutableCollectionInterface extends
    ItemAdditionCapableInterface,
    ItemRemovalCapableInterface
{
}
