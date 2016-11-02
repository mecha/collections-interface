<?php

namespace Dhii\Collection;

/**
 * A set, items for which can be checked and added.
 *
 * @since [*next-version*]
 */
interface WritableSetInterface extends
    ExtensibleSetInterface,
    ReducibleSetInterface,
    MutableSetInterface
{
}
