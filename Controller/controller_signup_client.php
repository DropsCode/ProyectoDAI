<?php

    include '../Utils/connect.php';
    include '../Models/user.php';
    include '../Models/client.php';
    include '../Models/commune.php';

    $comms = Commune::all_communes();
    
    //Comprobar de envío el formulario
    if(isset($_POST['signup_client'])) {
      $link = connect();
      $firstName = mysqli_real_escape_string($link, $_POST['txtName']);
      $lastName = mysqli_real_escape_string($link, $_POST['txtSurName']);
      $email = mysqli_real_escape_string($link, $_POST['txtEmail']);
      $rut = mysqli_real_escape_string($link, $_POST['txtRut']);
      $address = mysqli_real_escape_string($link, $_POST['txtAddress']);
      $commune = mysqli_real_escape_string($link, $_POST['idCommune']);
      $password = mysqli_real_escape_string($link, $_POST['txtPass']);

      $datos = array('RUT'=>$rut,'DV'=>' ','NAME'=>$firstName,'LAST_NAME'=>$lastName,'DIRECTION'=>$address, 'COMMUNE'=>$commune, 'EMAIL'=>$email, 'PASSWORD'=>$password, 'TYPE_USER'=>'1', 'RATING'=>' ');
      $persona = new User($datos);
      $persona->save();
      $rut_temp = $persona->RUT;
      
      if ($rut_temp == $persona->RUT){
        $datosClient = array('RUT'=> $persona->RUT);
        $client = new client($datosClient);
        $client-> save();
        
        include '../Views/index/dashboard.php';
      }else{
        $errormsg = "Datos incorrectos";
        echo "Datos incorrectos";
        trigger_error("Datos ingresado son incorrectos", E_USER_ERROR); 
      }
    }else{
      include '../Views/signup/signup_client.php';
    }
?>