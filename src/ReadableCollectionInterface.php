<?php

namespace Dhii\Collection;

/**
 * A collection, the item bulk of which can be retrieved as a whole,
 * together with its size.
 *
 * @since [*next-version*]
 */
interface ReadableCollectionInterface extends
    GrossCollectionInterface,
    CountableCollectionInterface
{
}
