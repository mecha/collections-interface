<?php

namespace Dhii\Collection;

/**
 * A set that can have items added to, and their count retrieved.
 *
 * @since [*next-version*]
 */
interface GrowableSetInterface extends
    CountableSetInterface,
    ExtensibleSetInterface
{
}
