<?php

namespace Dhii\Collection;

/**
 * A set that can have items removed and their count retrieved.
 *
 * @since [*next-version*]
 */
interface AbatableSetInterface extends
    CountableSetInterface,
    ReducibleSetInterface
{
}
