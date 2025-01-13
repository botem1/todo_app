<?php
    require_once __DIR__ . '/../db.php';

    $result = $con->query('
        SELECT c.category_id, c.category_name
        FROM categories c
    ');

    foreach($result as $row){
        echo '<option id="' . $row["category_id"] . '">';
        echo $row["category_name"];
        echo '</option>';
    }
?>