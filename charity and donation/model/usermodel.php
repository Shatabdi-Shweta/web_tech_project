<?php
    require_once('db.php');

    function login($username,$password){
        $conn = dbConnection();
        $sql = "select * from users where name ='{$username}' and password = '{$password}'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            return true;
        }else{
            return false;
        }

    }

    function createUser($user){
        $conn = dbConnection();
        $sql = "insert into users values ('','{$user['username']}','{$user['password']}','{$user['email']}')";

        if(mysqli_query($conn,$sql)){
            header('location: ../view/login.php');
        }else{
            echo 'Error!';
        }
    }
    

    function getAllUser(){
        $conn = dbConnection();
        $sql = "select * from users";
        $result = mysqli_query($conn,$sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push ($users,$row);
        }
        return $users;
    }
?>