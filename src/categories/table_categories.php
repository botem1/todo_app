<table class="table table-hover mx-auto w-25 bg-transparent position-static">
    <thead class="">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            require_once 'src/db.php';

            $result = $con->query('
                SELECT c.category_id, c.category_title
                FROM categories c
            ');

            foreach($result as $row){
                echo '<tr id= ' . $row["category_id"] . '>';

                echo '<td>';
                echo $row["category_id"];
                echo '</td>';

                echo '<td>';
                echo $row["category_title"];
                echo '</td>';

                echo '<td class="align-middle">
                <button class="trash-button-category">
                <a href="#" class="edit-symbol">&#128465;</a>
                </button>
                </td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>