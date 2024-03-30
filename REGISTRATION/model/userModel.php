<?php
    require_once('db.php');

    function login($name,$password){
        $conn = dbConnection();
        $sql = "select * from users where name ='{$name}' and password = '{$password}'";
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
        
        $sql = "select * from users where name = '{$user['username']}'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            echo "user already exist..";
        } else{
            $sql = "insert into users values ('','{$user['first_name']}','{$user['last_name']}','{$user['password']}',
            '{$user['confirm_password']}','{$user['gender']}','{$user['email']}','{$user['phone_no']}','{$user['address']}')";

            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);
            
            if($count == 1) {
                return true;
            } else{
                return false;
            }
        }
    }

    function getAllUser(){
        $conn = dbConnection();
        $sql = "select * from users";
        $result = mysqli_query($conn, $sql);
        $users= [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }
    
        return $users;
    }
    
    function updateUser($user){
        $conn = dbConnection();
        $sql = "UPDATE users SET ('','{$user['first_name']}','{$user['last_name']}','{$user['password']}',
        '{$user['confirm_password']}','{$user['gender']}','{$user['email']}','{$user['phone_no']}','{$user['address']}')";

        if(mysqli_query($conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function getUserByID($sl){
        $conn = dbConnection();
        $sql = "SELECT * FROM users WHERE SL={$sl}";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }
    
    function deleteUser($sl){
        $conn = dbConnection();
        $sql = "DELETE FROM users WHERE SL={$sl}";
    
        if(mysqli_query($conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

?>