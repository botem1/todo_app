<?php

require __DIR__ . '/../db.php';

if(isset($_POST["assignee_id"])){
    $result = $con->query("
        DELETE FROM assignees
        WHERE assignee_id = '{$_POST["assignee_id"]}';
    ");

} else{
    echo "error occured in add_assignee.php";
}