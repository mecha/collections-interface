<?php

namespace Dhii\Collection\UnitTest;

/**
 * Tests {@see Dhii\Collection\SearchableCollectionInterface}.
 *
 * @since [*next-version*]
 */
class SearchableCollectionInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return Dhii\Collection\SearchableCollectionInterface
     */
    public function createInstance()
    {
        $mock = $this->getMock('Dhii\Collection\SearchableCollectionInterface');

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

        $this->assertInstanceOf('Dhii\Collection\SearchableCollectionInterface', $subject, 'Could not create an implementing instance');
    }
}
