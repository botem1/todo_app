<?php

require __DIR__ . '/../db.php';

if(isset($_POST["assignee_name"])){
    $result = $con->query("
        INSERT INTO assignees (assignee_name)
        VALUES ('{$_POST["assignee_name"]}');
    ");
} else{
    echo "error occured in add_assignee.php";
}