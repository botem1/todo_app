<?php
    require_once __DIR__ . '/../db.php';

    $result = $con->query('
        SELECT a.assignee_id, a.assignee_name
        FROM assignees a
    ');

    foreach($result as $row){
        echo '<option id="' . $row["assignee_id"] . '">';
        echo $row["assignee_name"];
        echo '</option>';
    }
?>