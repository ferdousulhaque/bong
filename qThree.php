<?php

include "./lcaCalculate.php";

// Generating the tree
$t = new Node(10);
 
$n1 = new Node(20);
$n2 = new Node(5);
$n3 = new Node(7);
$n4 = new Node(13);
 
$t->insert($n1);
$t->insert($n2);
$t->insert($n3);
 
$lca = new lcaCalculate;

$time_start = microtime(true);
echo $lca->lca($n3, $n1)."\r\n";
$execution_time = (1000*(microtime(true) - $time_start));
echo "Time:".round($execution_time, 2)." ms\r\n";
echo "Memory:".round((memory_get_usage (false)/1024))." KB\r\n";

/**
 * Runtime and Memory Requirements
 * O(n) + O(n) + O(n)
 * Memory: 397 KB
 */