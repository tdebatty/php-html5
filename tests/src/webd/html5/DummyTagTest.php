<?php

namespace webd\html5;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-09-04 at 09:16:40.
 */
class DummyTagTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var DummyTag
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new DummyTag;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers webd\html5\DummyTag::__toString
     * @todo   Implement test__toString().
     */
    public function test__toString() {
        $this->object->appendChild(new P());
        $this->assertEquals("<p></p>", $this->object->__toString());
    }

}