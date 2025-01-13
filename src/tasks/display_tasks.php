<?php
    require_once __DIR__ . '/../db.php';

    $result = $con->query('
        SELECT *
        FROM tasks
    ');

    foreach($result as $row){
        echo '<tr id= ' . $row["task_id"] . '>';

        echo '<td>';
        echo $row["task_title"];
        echo '</td>';

        echo '<td>';
        echo $row["task_deadline"];
        echo '</td>';

        echo '<td>';
        echo $row["task_assignee"];
        echo '</td>';

        echo '<td>';
        echo $row["task_category"];
        echo '</td>';

        echo '<td>';
        echo $row["task_description"];
        echo '</td>';

        echo '<td>';
        echo '<div class="form-check">
            <input  type="checkbox" class="task-status-checkbox">
            </div>';
        echo '</td>';

        echo '<td class="align-middle">
        <a href="#" class="edit-symbol">&#128465;</a>
        </td>';
        echo '</tr>';
    }
?>