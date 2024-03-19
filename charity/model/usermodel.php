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
        $sql = "insert into users values ('','{$user['user_type']}','{$user['username']}','{$user['email']}','{$user['password']}')";
        
        if(mysqli_query($conn, $sql)) {
            return true;
        }else{
            return false;
        }
    }
    

    

?>