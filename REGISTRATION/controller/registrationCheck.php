<?php

    require_once('../model/usermodel.php');

    $first_name=$_REQUEST['first_name'];
    $last_name=$_REQUEST['last_name'];
    $password1 = $_REQUEST['password'];
    $password2 = $_REQUEST['confirm_password'];
    $gender = $_REQUEST['gender'];
    $email=$_REQUEST['email'];
    $phn_no = $_REQUEST['phone_no'];
    $address = $_REQUEST['address'];

    // validation
    if($first_name == "" || $last_name == "" || $password1 =="" || $password2 == "" || $gender == "" || $email == "" ||  $phn_no == "" || $address == ""){
        echo " required username/password/email";
    }
    elseif(strlen($first_name) < 3 || strlen($first_name) > 10) {
        echo "first name must be between 3 to 10 characters long.";
    }
     elseif(strlen($last_name) < 3 || strlen($last_name) > 10) {
        echo "last name must be between 3 to 10 characters long.";
    }
    elseif($password1 == $first_name){
        echo "password can't  be same as name..";
    }
    elseif(strlen($password1) < 5 ) {
        echo "password must be at least 5 characters long..";
    }
    elseif($password1 != $password2){
        echo "password and confirm password must be same.";
    }
    
    // If everything is correct, register the user
    else{
        $user = ['first_name'=>$first_name,'last_name'=>$last_name,'password'=>$password1,'confirm_password'=>$password2,
        'gender'=>$gender,'email'=>$email,'phone_no'=>$phn_no,'address'=>$address];
        
        $status = createUser($user);

        if($status){
            header('location:../view/login.php');
        } else{
            echo "please try again";
        }
    }
?>