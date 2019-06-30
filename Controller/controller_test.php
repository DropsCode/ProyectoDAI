<?php

    include '../Utils/connect.php';
    include '../Models/user.php';
        
        //Comprobar de envío el formulario
        if(isset($_POST['username']) && isset($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $login = User::get_user_by_email($username);
            
            
            //var_dump($login);
            //$_SESSION["user_id"] = $login->RUT;
            include '../Test/view_test2.php';


        }else{
            if(isset($_SESSION['user_id'])){
               // $user = User::get_user_by_id($_SESSION['user_id']);
               //include('../Views/index/index.php');
            }else{
                //include('../views/login/login.php');
                include "../Test/view_test.php";
            }
        }

   ?>

