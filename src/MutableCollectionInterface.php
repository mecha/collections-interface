<?php

namespace Dhii\Collection;

/**
 * Something that can act as a collection which can have its item set altered.
 *
 * @since 0.1.0
 */
interface MutableCollectionInterface extends
    ItemAdditionCapableInterface,
    ItemRemovalCapableInterface
{
}
