<?php

namespace Dhii\Collection;

/**
 * Something that can represent a collection, the items of which may be counted.
 * 
 * @since [*next-version*]
 */
interface CountableCollectionInterface extends
    BaseCollectionInterface,
    \Countable
{
}
