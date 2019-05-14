<?php

include "./lcaCalculate.php";

class lcaTest extends \Codeception\Test\Unit
{
    protected function _before()
    {}

    protected function _after()
    {}

    // tests
    public function testLcaResult()
    {
        // Generating the tree
        $t = new Node(10);
        
        $n1 = new Node(20);
        $n2 = new Node(5);
        $n3 = new Node(7);
        $n4 = new Node(13);
        
        $t->insert($n1);
        $n1->insert($n2);
        $n1->insert($n3);
        
        $lca = new lcaCalculate;
        $this->assertEquals(20,$lca->lca($n3, $n1));
    }
}