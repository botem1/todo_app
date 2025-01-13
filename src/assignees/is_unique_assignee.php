<?php

require __DIR__ . '/../db.php';

if(isset($_POST["assignee_name"])){
    $result = $con->query("
        SELECT a.assignee_id
        FROM assignees a
        WHERE a.assignee_name = '{$_POST["assignee_name"]}';
    ");

    $arr = $result->fetch_array();

    // echo var_dump($arr);
    if($arr){
        echo 0;
    } else{
        echo 1;
    }
} else{
    echo "error occured in is_unique_assignee.php";
}