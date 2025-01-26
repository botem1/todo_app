<?php
    require __DIR__ . '/../db.php';

    $result = $con->query('
        SELECT a.assignee_id, a.assignee_name
        FROM assignees a
    ');

    foreach($result as $row){
        echo '<tr id= ' . $row["assignee_id"] . '>';

        echo '<td>';
        echo $row["assignee_id"];
        echo '</td>';

        echo '<td>';
        echo $row["assignee_name"];
        echo '</td>';

        echo '<td class="align-middle">
        <button class="trash-button trash-button-assignee">
        <a href="#" class="edit-symbol">&#128465;</a>
        </button>
        </td>';
        echo '</tr>';
    }
?>