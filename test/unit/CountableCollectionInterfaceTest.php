<?php

namespace Dhii\Collection\UnitTest;

/**
 * Tests {@see Dhii\Collection\CountableCollectionInterface}.
 *
 * @since [*next-version*]
 */
class CountableCollectionInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return Dhii\Collection\CountableCollectionInterface
     */
    public function createInstance()
    {
        $mock = $this->getMock('Dhii\\Collection\\CountableCollectionInterface');

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

        $this->assertInstanceOf('Dhii\\Collection\\CountableCollectionInterface', $subject, 'Could not create an implementing instance');
        $this->assertInstanceOf('Dhii\\Collection\\BaseCollectionInterface', $subject, 'Subject is not a valid collection');
        $this->assertInstanceOf('Countable', $subject, 'Subject does not implement a required interface');
    }
}
