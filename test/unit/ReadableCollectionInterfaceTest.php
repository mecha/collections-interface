<?php

namespace Dhii\Collection\UnitTest;

/**
 * Tests {@see Dhii\Collection\ReadableCollectionInterface}.
 *
 * @since [*next-version*]
 */
class ReadableCollectionInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return Dhii\Collection\ReadableCollectionInterface
     */
    public function createInstance()
    {
        $mock = $this->getMock('Dhii\\Collection\\ReadableCollectionInterface');

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

        $this->assertInstanceOf('Dhii\\Collection\\ReadableCollectionInterface', $subject, 'Could not create an implementing instance');
        $this->assertInstanceOf('Dhii\\Collection\\BaseCollectionInterface', $subject, 'Subject is not a valid collection');
    }
}
