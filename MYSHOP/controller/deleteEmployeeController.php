<?php 
    require_once('../model/employeeModel.php');

    $Id = $_REQUEST["id"];

    $result = deleteEmployee($Id);
    if($result = TRUE){
        echo "success";
    }else{
        echo "failed";
    }
?>