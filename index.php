<?php require_once 'src/header.php'?>

<table class="table table-hover mx-auto w-50 bg-transparent position-static">
    <thead class="">
        <tr>
        <th>Title</th>
        <th>Deadline</th>
        <th>Assignee</th>
        <th>Category</th>
        <th class="description-column">Description</th>
        <th>Status</th>
        <th></th>
        </tr>
    </thead>
    <tbody>
        <?php require_once 'src/tasks/display_tasks.php'?>
    </tbody>
</table>

<?php require_once 'src/tasks/modal_tasks.php'?>

<?php require_once 'src/footer.php'?>