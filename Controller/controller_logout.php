<?php 

    if(isset($_SESSION["usuario"])){
        session_destroy();
        $msg = "Sesion finalizada"; 
    }
    include('controller_index.php');

?>