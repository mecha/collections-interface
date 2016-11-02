<?php

namespace Dhii\Collection;

/**
 * A set, items for which can be checked and retrieved, but not added or removed.
 *
 * @since [*next-version*]
 */
interface ReadableSetInterface extends
    GrossSetInterface,
    CountableSetInterface
{
}
