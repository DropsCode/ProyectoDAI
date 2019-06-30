<?php
    include '../Utils/connect.php';
    include '../Models/user.php';
    include '../Models/worker.php';
    include '../Models/commune.php';
    include '../Models/professions.php';
    
    if(isset($_SESSION['usr_id'])!="") {
	    header("Location: ../Controller/controller_dashboard.php");
    }

    $comms = Commune::all_communes();
    $profs = Professions::all_professions();

    //Comprobar de envío el formulario
    if(isset($_POST['signup_worker'])) {
        $link = connect();
        $firstName = mysqli_real_escape_string($link, $_POST['txtName']);
        $lastName = mysqli_real_escape_string($link, $_POST['txtSurName']);
        $email = mysqli_real_escape_string($link, $_POST['txtEmail']);
        $rut = mysqli_real_escape_string($link, $_POST['txtRut']);
        $address = mysqli_real_escape_string($link, $_POST['txtAddress']);
        $commune = mysqli_real_escape_string($link, $_POST['idCommune']);
        $profession = mysqli_real_escape_string($link, $_POST['idProfession']);
        $password = mysqli_real_escape_string($link, $_POST['txtPass']);

        $datos = array('RUT'=>$rut,'DV'=>' ','NAME'=>$firstName,'LAST_NAME'=>$lastName,'DIRECTION'=>$address, 'COMMUNE'=>$commune, 'EMAIL'=>$email, 'PASSWORD'=>$password, 'TYPE_USER'=>'2', 'RATING'=>' ');
        $persona = new User($datos);
        $persona->save();
        $rut_temp = $persona->RUT;
        $prof_temp = $profession;
        
        if ($rut_temp == $persona->RUT && $prof_temp == $profession){
          $datosWorker = array('RUT'=> $persona->RUT, 'COD_PROFESSION'=> $prof_temp);
          $worker = new Worker($datosWorker);
          $worker-> save();
         
          include '../views/index/dashboard.php';
          exit();
          
        }else{
          $errormsg = "Datos incorrectos";
          echo "Datos incorrectos";
          trigger_error("Datos ingresado son incorrectos", E_USER_ERROR); 
        }
      }else{
        include'../Views/signup/signup_worker.php';
      }     

?>