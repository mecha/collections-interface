<?php

namespace Dhii\Collection;

/**
 * A set, items for which can be checked and retrieved as a whole, or counted.
 *
 * @since [*next-version*]
 */
interface ReadableSetInterface extends
    GrossSetInterface,
    CountableSetInterface,
    ReadableCollectionInterface
{
}
