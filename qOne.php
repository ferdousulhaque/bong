<?php

include "./printDepth.php";

$a = array (
"key1" => 1,
"key2" => array (
                "key3" => 1,
                "key4" => array (
                                "key5" => 4
                            ),
        ),
);

$pd = new printDepthClass();
$pd->printDepth($a);