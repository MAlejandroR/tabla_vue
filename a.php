<?php

$array =[1,2,3,4,"mariaa", "vue", 5,6];
var_dump($array);

$array_serializado = serialize($array);
var_dump($array_serializado);



$array_deserializado = unserialize($array_serializado);
var_dump($array_deserializado);


?>
