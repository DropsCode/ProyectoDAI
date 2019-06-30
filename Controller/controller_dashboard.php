<?php
    include '../Utils/connect.php';
    include '../Models/user.php';

    $users = User::all_users();

    if (session_destroy()) {
        include '../Views/login/login.php';
    } else {
        include '../Views/index/dashboard.php';   
    }


?>