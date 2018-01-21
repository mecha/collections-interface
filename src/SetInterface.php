<?php

namespace Dhii\Collection;

use Traversable;
use Dhii\Data\Container\HasCapableInterface;

/**
 * A list that can be checked for a key.
 *
 * @since [*next-version*]
 */
interface SetInterface extends
    /* @since [*next-version*] */
    Traversable,
    /* @since [*next-version*] */
    HasCapableInterface
{
}
