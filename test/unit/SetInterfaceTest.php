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
     * @return \Dhii\Collection\SetInterface
     */
    public function createInstance()
    {
        $mock = $this->getMockBuilder('Dhii\\Collection\\SetInterface')
                ->getMockForAbstractClass();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf('Dhii\\Collection\\SetInterface', $subject, 'A valid instance of the test subject could not be created');
        $this->assertInstanceOf('Countable', $subject, 'A valid instance of the test subject could not be created');
    }
}
