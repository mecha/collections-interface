<?php

namespace Dhii\Collection;

/**
 * A collection that can have items added, and their count retrieved.
 *
 * @since [*next-version*]
 */
interface GrowableCollectionInterface extends
    CountableCollectionInterface,
    ExtensibleCollectionInterface
{
}
