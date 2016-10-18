<?php

namespace Dhii\Collection\UnitTest;

/**
 * Tests {@see Dhii\Collection\UnsetCapableCollectionInterface}.
 *
 * @since [*next-version*]
 */
class UnsetCapableCollectionInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return Dhii\Collection\UnsetCapableCollectionInterface
     */
    public function createInstance()
    {
        $mock = $this->getMock('Dhii\\Collection\\UnsetCapableCollectionInterface');

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

        $this->assertInstanceOf('Dhii\\Collection\\UnsetCapableCollectionInterface', $subject, 'Could not create an implementing instance');
        $this->assertInstanceOf('Dhii\\Collection\\BaseCollectionInterface', $subject, 'Subject is not a valid collection');
    }
}
