<?php

require __DIR__ . '/../db.php';

if(isset($_POST["task_name"], $_POST["task_assignee"], $_POST["task_deadline"], $_POST["task_category"], $_POST["task_description"])){
    $query = "
                INSERT INTO tasks 
                (task_title, task_description, task_deadline, category_id, assignee_id)
                VALUES ( '{$_POST["task_name"]}', '{$_POST["task_description"]}', '{$_POST["task_deadline"]}', {$_POST["task_category"]}, {$_POST["task_assignee"]});";
    $result = $con->query($query);
} else{
    echo "error occured in add_category.php";
}