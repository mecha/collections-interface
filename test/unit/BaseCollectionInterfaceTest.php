<?php

namespace Dhii\Collection\UnitTest;

/**
 * Tests {@see Dhii\Collection\BaseCollectionInterface}.
 *
 * @since [*next-version*]
 */
class BsaeCollectionInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return Dhii\Collection\BaseCollectionInterface
     */
    public function createInstance()
    {
        $mock = $this->getMock('Dhii\\Collection\\BaseCollectionInterface');

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

        $this->assertInstanceOf('Dhii\\Collection\\BaseCollectionInterface', $subject, 'Could not create an implementing instance');
    }
}
