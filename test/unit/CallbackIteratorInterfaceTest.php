<?php

namespace Dhii\Collection\UnitTest;

/**
 * Tests {@see Dhii\Collection\CallbackIteratorInterface}.
 *
 * @since [*next-version*]
 */
class CallbackIteratorInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return Dhii\Collection\CallbackIteratorInterface
     */
    public function createInstance()
    {
        $mock = $this->getMock('Dhii\\Collection\\CallbackIteratorInterface');

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

        $this->assertInstanceOf('Dhii\\Collection\\CallbackIteratorInterface', $subject, 'Could not create an implementing instance');
        $this->assertInstanceOf('Iterator', $subject, 'Subject does not implement required interface');
    }
}
