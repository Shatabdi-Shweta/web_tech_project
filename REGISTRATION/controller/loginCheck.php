<?php

    session_start();

    require_once('../model/usermodel.php');

    $name=$_REQUEST['name'];
    $password=$_REQUEST['password'];

    if($name ==" " || $password ==" " || $name == "" || $password == ""){
        echo "required name or password";
    }

    else{

        $status=login($name,$password);
        if($status){
            $_SESSION['flag'] = "true";
            setcookie('flag','true',time()+3600,'/');
            header('location:../view/home.php');
        } else{
            echo "invalid user";
        }
    }
?>