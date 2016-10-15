<?php

namespace Dhii\Collection\UnitTest;

/**
 * Tests {@see Dhii\Collection\AccessibleCollectionInterfaceTest}.
 *
 * @since [*next-version*]
 */
class AccessibleCollectionInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return Dhii\Collection\AccessibleCollectionInterfaceTest
     */
    public function createInstance()
    {
        $mock = $this->getMock('Dhii\\Collection\\AccessibleCollectionInterface');

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

        $this->assertInstanceOf('Dhii\\Collection\\AccessibleCollectionInterface', $subject, 'Could not create an implementing instance');
        $this->assertInstanceOf('Dhii\\Collection\\CollectionInterface', $subject, 'Subject is not a valid collecton');
        $this->assertInstanceOf('Dhii\\Collection\\ReadableCollectionInterface', $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf('Dhii\\Collection\\BulkRetrievableCollectionInterface', $subject, 'Subject does not implement required interface');
    }
}
