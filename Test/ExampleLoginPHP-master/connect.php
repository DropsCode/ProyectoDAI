<?php

    function connect(){

        $database_name = "dbproyecto";
        $username = "dbproyecto";
        $password = "dbproyecto";
        $server = "localhost";

        $link = mysqli_connect($server, $database_name, $username, $password);

        if (!$link) {
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                return false;
        }else{
            return $link;
        }
    }
?>
