<?php
    require_once('../model/requestedResource.php');

    function addResource($resource_title,$thumbnail,$description,$category,$owner){
        if($resource_title = "" || $thumbnail = "" || $description = "" || $category = "" || $owner = ""){
            echo "required each field";
        }else{
            $result = add_request_resource($resource_title,$thumbnail,$description,$category,$owner);
            header('location:resource.php');
        }
    }
?>