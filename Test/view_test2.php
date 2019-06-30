<?php


    $logeado = User::get_user_by_email($_POST['username']);
    echo "hola";
    echo "<br>";
    echo $logeado->NAME;
    echo "<br>";
    echo $logeado->LAST_NAME;
    echo "<br>";
    echo $logeado->RUT;
    echo "<br>";
    echo $logeado->EMAIL;
    echo "<br>";

    //var_dump($_POST);

    

    //print_r(array_keys($_POST));
?>
    
