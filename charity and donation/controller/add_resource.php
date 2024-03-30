<?php
    require_once('../model/educationalResource.php');
    
    $resource_title = $_REQUEST['resource_title'];
    $thumbnail = "";
    $description = $_REQUEST['description'];
    $category = $_REQUEST['category'];
    $owner ="admin";

    $name = "thumbnail";
    $imageName = $_FILES["thumbnail"]["name"];
    $imageSize = $_FILES["thumbnail"]["size"];
    $tmpName = $_FILES["thumbnail"]["tmp_name"];

    // Image validation
    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $imageName);
    $imageExtension = strtolower(end($imageExtension));
    
    if (!in_array($imageExtension, $validImageExtension)){
        echo "Invalid image extension!";
        echo $imageName;
        echo $imageExtension;
    }

    elseif ($imageSize > 5000000){
        echo "File is too large!";
    }

    // if image is valid, save this
    else {
        $newImageName = "../uploads/" . $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
        $newImageName .= '.' . $imageExtension;
        $thumbnail = $newImageName;
        move_uploaded_file($tmpName, '../uploads/' . $newImageName);
    }

    // null validation
    if($resource_title == "" || $thumbnail == "" || $description == "" || $category == "" || $owner == ""){
        echo "Required each field!";
    }
    // if no validation error, add resource to database
    else{
        $result = add_request_resource($resource_title,$thumbnail,$description,$category,$owner);
        
        if ($result = true) {
            header('location:../view/educationalResources.php');
        } else {
            echo "Failed";
        }
    }
?>