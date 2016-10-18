<?php

namespace Dhii\Collection;

/**
 * Something that can represent a key-value map that can have the items read
 * from, all together or one by one, and that can be checked for existance of
 * an item.
 *
 * @since [*next-version*]
 */
interface ReadableMapInterface extends
    BulkRetrievableCollectionInterface,
    ReadableCollectionInterface
{
}
