<?php

namespace Dhii\Collection\UnitTest;

/**
 * Tests {@see Dhii\Collection\SequentialIteratorInterface}.
 *
 * @since [*next-version*]
 */
class SequentialIteratorInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return Dhii\Collection\SequenceIteratorIteratorInterface
     */
    public function createInstance()
    {
        $mock = $this->getMock('Dhii\\Collection\\SequentialIteratorInterface');

        return $mock;
    }

    /**
     * Tests whether a correct instance of a descendant can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf('Dhii\\Collection\\SequentialIteratorInterface', $subject, 'Could not create an implementing instance');
        $this->assertInstanceOf('OuterIterator', $subject, 'Subject does not implement required interface');
    }
}
