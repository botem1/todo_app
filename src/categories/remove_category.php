<?php

require __DIR__ . '/../db.php';

if(isset($_POST["category_id"])){
    $result = $con->query("
        DELETE FROM categories
        WHERE category_id = '{$_POST["category_id"]}';
    ");

} else{
    echo "error occured in add_category.php";
}