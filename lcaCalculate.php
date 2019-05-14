<?php

class Node
{
    public $key;
 
    public $parent  = null;
    public $left    = null;
    public $right   = null;
 
    public function __construct($key) 
    {
        $this->key = $key;
    }
 
    /**
     * node insertion
     * $n instance of Node
     */
    public function insert(Node $n) 
    {
        if ($this->key < $n->key) {
            if ($this->right == null) {
                // insert right leaf
                $this->right = $n;
                $n->parent = $this;
            } else {
                $this->right->insert($n);
            }
        }
        if ($this->key > $n->key) {
            if ($this->left == null) {
                // insert left leaf
                $this->left = $n;
                $n->parent = $this;
            } else {
                $this->left->insert($n);
            }
        }
    }
}
class lcaCalculate {
    /**
     * $node1 instance of Node
     * $node2 instance of Node
     * return int
     */
    function lca($node1, $node2) 
    {
        $vals_n1 = [];
        $vals_n1[] = $node1->key;
        $rec = $node1->parent;
        while(is_object($rec)){
            $vals_n1[] = $rec->key;
            $rec = $rec->parent;
        }
        
        $vals_n2 = [];
        $vals_n2[] = $node2->key;
        $rec = $node2->parent;
        while(is_object($rec)){
            $vals_n2[] = $rec->key;
            $rec = $rec->parent;
        }
        $i = 0;
        
        for($i=0;$i<count($vals_n1);$i++){
            $check = in_array($vals_n1[$i],$vals_n2);
            if($check){
                break;
            }
        }
        
        return $vals_n1[$i];
    }
}