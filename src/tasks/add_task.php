<?php

require __DIR__ . '/../db.php';

if(isset($_POST["task_name"], $_POST["task_assignee"], $_POST["task_deadline"], $_POST["task_category"], $_POST["task_description"])){
    $q = "
                INSERT INTO tasks 

                VALUES (NULL, '{$_POST["task_name"]}', '{$_POST["task_description"]}', '{$_POST["task_deadline"]}', {$_POST["task_category"]}, {$_POST["task_assignee"]});";
    echo $q;
    $result = $con->query($q);
} else{
    echo "error occured in add_category.php";
}