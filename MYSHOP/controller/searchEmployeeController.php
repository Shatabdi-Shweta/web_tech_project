<?php 
    include_once('../model/employeeModel.php');

    $search_employee_id = $_REQUEST["search_id"];

    $result = searchEmployee($search_employee_id);

    if($result = TRUE){
        echo "success";
    }else{
        echo "false";
    }
?>