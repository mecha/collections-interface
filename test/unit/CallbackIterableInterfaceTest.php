<?php

namespace Dhii\Collection\UnitTest;

/**
 * Tests {@see Dhii\Collection\CallbackIterableInterface}.
 *
 * @since [*next-version*]
 */
class CallbackIterableInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return Dhii\Collection\CallbackIterableInterface
     */
    public function createInstance()
    {
        $mock = $this->getMock('Dhii\Collection\CallbackIterableInterface');

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

        $this->assertInstanceOf('Dhii\Collection\CallbackIterableInterface', $subject, 'Could not create an implementing instance');
    }
}
