<?php

require __DIR__ . '/../db.php';

if(isset($_POST["task_id"])){
    $result = $con->query("
        DELETE FROM tasks
        WHERE task_id = '{$_POST["task_id"]}';
    ");

} else{
    echo "error occured in add_assignee.php";
}