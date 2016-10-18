<?php

namespace Dhii\Collection\UnitTest;

/**
 * Tests {@see Dhii\Collection\ReadableSetInterface}.
 *
 * @since [*next-version*]
 */
class ReadableSetInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return Dhii\Collection\ReadableSetInterface
     */
    public function createInstance()
    {
        $mock = $this->getMock('Dhii\\Collection\\ReadableSetInterface');

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
    }
}
