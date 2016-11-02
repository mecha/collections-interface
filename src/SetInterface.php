<?php

namespace Dhii\Collection;

/**
 * A set, items for which can be added, removed, retrieved, and checked.
 *
 * @since [*next-version*]
 */
interface SetInterface extends
    WritableSetInterface,
    ReadableSetInterface,
    TraversableSetInterface,
    AbatableSetInterface,
    GrowableSetInterface
{
}
