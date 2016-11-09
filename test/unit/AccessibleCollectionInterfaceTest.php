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
        $mock = $this->getMock('Dhii\\Collection\\AccessibleCollectionInterfaceTest');

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

        $this->assertInstanceOf('Dhii\\Collection\\AccessibleCollectionInterfaceTest', $subject, 'Could not create an implementing instance');
    }
}
