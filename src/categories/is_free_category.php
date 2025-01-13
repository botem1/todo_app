<?php

require __DIR__ . '/../db.php';

if(isset($_POST["category_id"])){
    $result = $con->query("
        SELECT t.category_id
        FROM tasks t
        WHERE t.category_id = '{$_POST["category_id"]}';
    ");

    $arr = $result->fetch_array();

    if($arr){
        echo 0;
    } else{
        echo 1;
    }
} else{
    echo "error occured in is_free_category.php";
}