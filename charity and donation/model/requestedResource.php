<?php
    require_once('db.php');

    function add_request_resource($resource_title,$thumbnail,$description,$category,$owner){
        $conn = dbConnection();
        $sql = "INSERT INTO educational_resources (resource_title,thumbnail,description,category,owner) values('{$resource_title}','{$thumbnail}','{$description}','{$category}','{$owner}')";
        $result = mysqli_query($conn,$sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
?>