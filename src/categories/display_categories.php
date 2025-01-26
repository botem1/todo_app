<?php
    require_once __DIR__ . '/../db.php';

    $result = $con->query('
        SELECT c.category_id, c.category_name
        FROM categories c
    ');

    foreach($result as $row){
        echo '<tr id= ' . $row["category_id"] . '>';

        echo '<td>';
        echo $row["category_id"];
        echo '</td>';

        echo '<td>';
        echo $row["category_name"];
        echo '</td>';

        echo '<td class="align-middle">
        <button class="trash-button trash-button-category">
        <a href="#" class="edit-symbol">&#128465;</a>
        </button>
        </td>';
        echo '</tr>';
    }
?>