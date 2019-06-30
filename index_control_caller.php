<?php

include 'connect.php';
include 'Utils/puerto.php';
include 'Utils/puertoReParada.php';
include 'http://localhost:'.$portReParada.'/dai/Controller/controller_index.php';
header("Location: Controller/controller_index.php");


/*
include 'Utils/puerto.php';
include 'Utils/puertoReParada.php';

echo 'http://localhost:'.$port.'/dai/Controller/controller_index.php';
*/
?>