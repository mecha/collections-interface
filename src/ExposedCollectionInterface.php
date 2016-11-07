<?php

namespace Dhii\Collection;

/**
 * A collection that allows the retrieval of items individually or as a whole
 * bulk, as well in a loop, and also allowing retrieval of its size.
 *
 * @since [*next-version*]
 */
interface ExposedCollectionInterface extends
    TraversableCollectionInterface,
    OpenCollectionInterface
{
}
