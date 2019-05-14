<?php

include "./printDepth.php";

class depthTest extends \Codeception\Test\Unit
{
    protected function _before()
    {}

    protected function _after()
    {}

    // tests for print Depth
    public function testDepthResult()
    {
        $a = array (
            "key1" => 1,
            "key2" => array (
                            "key3" => 1,
                            "key4" => array (
                                            "key5" => 4
                                        ),
                    ),
            );
        $obj = new printDepthClass();
        $this->assertEquals("key22", $obj->printDepth($a));
    }

}