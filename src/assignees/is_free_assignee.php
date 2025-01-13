<?php

require __DIR__ . '/../db.php';

if(isset($_POST["assignee_id"])){
    $result = $con->query("
        SELECT t.assignee_id
        FROM tasks t
        WHERE t.assignee_id = '{$_POST["assignee_id"]}';
    ");

    $arr = $result->fetch_array();

    if($arr){
        echo 0;
    } else{
        echo 1;
    }
} else{
    echo "error occured in is_free_assignee.php";
}