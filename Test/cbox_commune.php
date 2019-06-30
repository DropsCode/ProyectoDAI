<?php

$mysql = NEW MySQLi('localhost', 'dbproyecto', 'dbproyecto', 'dbproyecto');

$resultSet = $mysql->query("select COD_NAME_COMM from commune");

echo gettype($mysql);
?>
