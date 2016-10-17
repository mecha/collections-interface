<?php

namespace Dhii\Collection\UnitTest;

/**
 * Tests {@see Dhii\Collection\CallbackCollectionInterface}.
 *
 * @since [*next-version*]
 */
class CallbackCollectionInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return Dhii\Collection\CallbackCollectionInterface
     */
    public function createInstance()
    {
        $mock = $this->getMock('Dhii\\Collection\\CallbackCollectionInterface');

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
        $this->assertInstanceOf('Dhii\\Collection\\CallbackCollectionInterface', $subject, 'Subject does not implement required interface');
    }
}
