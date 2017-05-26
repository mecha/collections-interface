<?php

namespace Dhii\Collection\UnitTest;

/**
 * Tests {@see Dhii\Collection\SetInterface}.
 *
 * @since [*next-version*]
 */
class SetInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return Dhii\Collection\WritableSetInterface
     */
    public function createInstance()
    {
        $mock = $this->getMock('Dhii\\Collection\\SetInterface');

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

        $this->assertInstanceOf('Dhii\\Collection\\WritableSetInterface', $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf('Dhii\\Collection\\ReadableSetInterface', $subject, 'Subject does not implement required interface');
    }
}
