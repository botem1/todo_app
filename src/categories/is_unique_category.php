<?php

require __DIR__ . '/../db.php';

if(isset($_POST["category_name"])){
    $result = $con->query("
        SELECT c.category_id
        FROM categories c
        WHERE c.category_name = '{$_POST["category_name"]}';
    ");

    $arr = $result->fetch_array();

    if($arr){
        echo 0;
    } else{
        echo 1;
    }
} else{
    echo "error occured in is_unique_category.php";
}