<?php
    require_once('../model/productModel.php');

    $Id = $_REQUEST["id"];

    $result  = deleteProduct($Id);
    if($result = TRUE){
        echo "success";
    }else{
        echo "failed";
    }
?>