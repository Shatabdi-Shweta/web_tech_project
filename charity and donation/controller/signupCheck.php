<?php

    require_once('../model/usermodel.php');

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $password2 = $_REQUEST['confirm_password'];
    $email = $_REQUEST['email'];
    $user_type = $_REQUEST["user-type"];

   // $allowedCharacters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_-';

    if($username == "" || $password =="" || $email == ""){
        echo " required username/password/email";
    }
    elseif(strlen($username) < 3 || strlen($username) > 10) {
        echo "Username must be between 3 to 10 characters long.";
    }
    elseif($password == $username){
        echo "password can't  be same as username..";
    }
    elseif(strlen($password) < 5 ) {
        echo "password must be at least 5 characters long..";
    }
    elseif($password != $password2){
        echo "password and confirm password must be same.";
    }
    else{
        // for ($i = 0; $i < strlen($username); $i++) {
        //     if (strpos($allowedCharacters, $username[$i]) === false) {
        //         echo "Username can only contain characters (a-z and A-Z), underscore (_) and hyphen (-).";
                
        //     }
        // }
        
        $user=['username'=>$username,'password'=>$password,'email'=>$email,'user_type'=>$user_type];
        $status = createUser($user);
        if($status){
            header('location:../view/login.php');
        }else{
            echo "please try again";
        }
    }
?>