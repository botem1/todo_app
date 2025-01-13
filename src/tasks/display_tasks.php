<?php
    require_once __DIR__ . '/../db.php';

    $result = $con->query('
        SELECT t.task_id, t.task_title, t.task_deadline, a.assignee_name, c.category_name, t.task_description
        FROM tasks t
        LEFT JOIN categories c ON t.category_id = c.category_id
        LEFT JOIN assignees a ON a.assignee_id = t.assignee_id
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
        echo $row["assignee_name"];
        echo '</td>';

        echo '<td>';
        echo $row["category_name"];
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
        <button class="trash-button-task">
        <a href="#" class="edit-symbol">&#128465;</a>
        </button>
        </td>';
        echo '</tr>';
    }
?>