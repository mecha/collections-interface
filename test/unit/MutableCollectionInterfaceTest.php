<?php

namespace Dhii\Collection\UnitTest;

/**
 * Tests {@see Dhii\Collection\MutableCollectionInterface}.
 *
 * @since [*next-version*]
 */
class MutableCollectionInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return Dhii\Collection\MutableCollectionInterface
     */
    public function createInstance()
    {
        $mock = $this->getMock('Dhii\\Collection\\MutableCollectionInterface');

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

        $this->assertInstanceOf('Dhii\\Collection\\MutableCollectionInterface', $subject, 'Could not create an implementing instance');
        $this->assertInstanceOf('Dhii\\Collection\\CollectionInterface', $subject, 'Subject is not a valid collection');
        $this->assertInstanceOf('Dhii\\Collection\\WriteableCollectionInterface', $subject, 'Subject does not extend required interface');
        $this->assertInstanceOf('Dhii\\Collection\\RemovalCapableCollectionInterface', $subject, 'Subject does not extend required interface');
        $this->assertInstanceOf('Dhii\\Collection\\ClearableCollectionInterface', $subject, 'Subject does not extend required interface');
    }
}
