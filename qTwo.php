<?php

include "./printDepthObj.php";

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

$pd = new printDepthObjClass();
$pd->printDepth($a);