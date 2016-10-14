<?php

namespace Dhii\Collection;

use OuterIterator;

/**
 * Something that can act as an iterator which iterates sequentially over elemnts in other iterators.
 *
 * Based on {@see \AppendIterator}. However, does not require a public {@link \AppendIterator::append() append()}
 * method, thus allowing iteration over a read-only list of iterators.
 *
 * Also, does not require a {@link \AppendIterator::getArrayIterator() getArrayIterator()} method.
 *
 * @since [*next-version*]
 */
interface SequentialIteratorInterface extends OuterIterator
{
    /**
     * Return a list of inner iterators, over the items of which this iterator iterates.
     *
     * @since [*next-version*]
     *
     * @return \Traversable[]|\Traversable The list of inner iterators.
     */
    public function getIterators();

    /**
     * @see \AppendIterator::getIteratorIndex()
     * @since [*next-version*]
     */
    public function getIteratorIndex();
}
