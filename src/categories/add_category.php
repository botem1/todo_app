<?php

require __DIR__ . '/../db.php';

if(isset($_POST["category_name"])){
    $result = $con->query("
        INSERT INTO categories (category_name)
        VALUES ('{$_POST["category_name"]}');
    ");
} else{
    echo "error occured in add_category.php";
}