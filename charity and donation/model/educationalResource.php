<?php
    require_once('db.php');

    function add_request_resource($resource_title,$thumbnail,$description,$category,$owner){
        $conn = dbConnection();
        $sql = "INSERT INTO educational_resources (resource_title,thumbnail,description,category,owner) values ('{$resource_title}','{$thumbnail}','{$description}','{$category}','{$owner}')";
        $result = mysqli_query($conn,$sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    function all_resource() {
        $conn = dbConnection();
        $sql = "select * from educational_resources";
        $result = mysqli_query($conn,$sql);
        
        $resources= [];

        while($resource = mysqli_fetch_assoc($result)){
            array_push($resources, $resource);
        }

        return $resources;
    }

    function viewResourceForId($id) {
        $conn = dbConnection();
        $sql = "select * from educational_resources where resource_id='{$id}'";
        $result = mysqli_query($conn,$sql);
        
        $resources= [];

        while($resource = mysqli_fetch_assoc($result)){
            array_push($resources, $resource);
        }

        return $resources;
    }
    
?>