<?php

namespace Dhii\Collection\UnitTest;

/**
 * Tests {@see Dhii\Collection\ReadableMapInterface}.
 *
 * @since [*next-version*]
 */
class ReadableMapInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return Dhii\Collection\ReadableMapInterface
     */
    public function createInstance()
    {
        $mock = $this->getMock('Dhii\\Collection\\ReadableMapInterface');

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

        $this->assertInstanceOf('Dhii\\Collection\\CollectionInterface', $subject, 'Could not create an implementing instance');
        $this->assertInstanceOf('Dhii\\Collection\\ReadableCollectionInterface', $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf('Dhii\\Collection\\BulkRetrievableCollectionInterface', $subject, 'Subject does not implement required interface');
    }
}
