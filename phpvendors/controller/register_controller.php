<?php
    include "../services/dbconnection.php";
    //include "../services/dbconfig.php";
    include "../services/class.user.php";
    include "../services/register_service.php";
    include "../services/dbmanipulate.php";
    $user_class = new USER();
    
    $username         = $_POST['username'];
    $email            = $_POST['email'];
    $password         = $_POST['password'];
    $confirm_password = $_POST['rep_password'];
    //$validation_code  = md5($username);
    
    register_user($username, $email, $password, $confirm_password, $user_class);
?>