<div class="modal fade" id="modal-add-task" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        <input type="email" class="form-control" id="TaskNameInput" placeholder="Enter task title...">

        <span>Choose assignee: </span>
        <select class="form-control" id="TaskAssigneeSelect">
          <?php require_once 'src/tasks/display_assignees_select.php'?>
        </select>

        <span>Choose deadline: </span>
          <?php require_once 'src/set_min_date.php'?>

        <span>Choose category: </span>
        <select class="form-control" id="TaskCategorySelect">
          <?php require_once 'src/tasks/display_categories_select.php'?>
        </select>

        <textarea class="form-control" id="TaskDescriptionTextarea" rows="10" maxlength="50" placeholder="Enter task description..."></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="addTaskBtn">Add</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="add-button" data-bs-toggle="modal" data-bs-target="#modal-add-task">
    &#65291;
</button>