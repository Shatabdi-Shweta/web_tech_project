<?php

    require_once('../model/usermodel.php');

    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    $email=$_REQUEST['email'];

    if($username == "" || $password =="" || $email == ""){
        echo " required username/password/email";
    }else{
        $user=['username'=>$username,'password'=>$password,'email'=>$email];
        $status=createUser($user);
        if($status){
            header('location:../view/login.php');
        }else{
            echo "please try again";
        }
    }
?>