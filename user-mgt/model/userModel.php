<?php 
require_once('db.php');

function login($username, $password){
    $con = dbConnection();
    $sql = "select * from users where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1) {
        return true;
    }else{
        return false;
    }
}


function createUser($user){
    $con = dbConnection();
    $sql = "insert into users values('', '{$user['username']}', '{$user['email']}', '{$user['password']}')";

    if(mysqli_query($con, $sql)) {
        return true;
    }else{
        return false;
    }
}

function updateUser($user){
    $conn = dbConnection();
    $sql = "UPDATE users SET username='{$user['username']}', email='{$user['email']}', password='{$user['password']}' WHERE id={$user['id']}";

    if(mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
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