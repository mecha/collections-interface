<?php

namespace Dhii\Collection\UnitTest;

/**
 * Tests {@see Dhii\Collection\ValidateCapableCollectionInterface}.
 *
 * @since [*next-version*]
 */
class ValidateCapableCollectionInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return Dhii\Collection\ValidateCapableCollection
     */
    public function createInstance()
    {
        $mock = $this->getMock('Dhii\\Collection\\ValidateCapableCollectionInterface');

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

        $this->assertInstanceOf('Dhii\\Collection\\ValidateCapableCollectionInterface', $subject, 'Could not create an implementing instance');
        $this->assertInstanceOf('Dhii\\Collection\\CollectionInterface', $subject, 'Subject is not a valid collection');
    }
}
