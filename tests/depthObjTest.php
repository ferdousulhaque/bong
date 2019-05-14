<?php

include "./printDepthObj.php";

class depthObjTest extends \Codeception\Test\Unit
{
    protected function _before()
    {}

    protected function _after()
    {}

    // tests for print Depth
    public function testDepthObjectResult()
    {
        $person_a = new Person("User", "1", NULL);
        $person_b = new Person("User", "2", $person_a);

        $a = array (
            "key1" => 1,
            "key2" => array (
                            "key3" => 1,
                            "key4" => array (
                                            "key5" => 4,
                                            "User" => $person_b,
                                        ),
                    ),
            );
        $obj = new printDepthObjClass();
        $this->assertEquals("key2", $obj->printDepth($a));
    }
}