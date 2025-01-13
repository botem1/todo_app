<?php require_once 'src/header.php'?>

<table class="table table-hover mx-auto w-25 bg-transparent position-static">
    <thead class="">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php require_once 'src/categories/display_categories.php'?>
    </tbody>
</table>

<?php require_once 'src/categories/modal_categories.php'?>

<?php require_once 'src/footer.php'?>