<?php
    require_once('../model/requestedResource.php');
    $resource_title = $_REQUEST["resource_title"];
    $thumbnail = $_REQUEST["thumbnail"];
    $description = $_REQUEST["description"];
    $category = $_REQUEST["category"];
    $owner ="admin";
    
    if($resource_title == "" || $thumbnail == "" || $description == "" || $category == "" || $owner == ""){
        echo "required each field";
    }else{
        add_request_resource($resource_title,$thumbnail,$description,$category,$owner);
        header('location:../view/resource.php');
    }
?>