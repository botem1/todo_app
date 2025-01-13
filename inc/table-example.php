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
        <tr id="task1">
            <td>Homework</td>
            <td>12/03/2025</td>
            <td>Jack</td>
            <td>School</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur enim quam, dictum vitae porta et, tempus vel felis. Orci varius</td>
            <td class="align-middle">
            <div class="form-check">
            <input  type="checkbox" value="" id="status-checkbox1">
            </div>
            </td>
            <td class="align-middle"><a href="#" class="edit-symbol">&#128465;</a></td>
        </tr>
        <tr>
            <td>Take out the trash</td>
            <td>05/02/2025</td>
            <td>Mom</td>
            <td>Household</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur enim quam, dictum vitae porta et, tempus vel felis. Orci varius</td>
            <td class="align-middle">
            <input class="form-check-input" type="checkbox" value="" class="status-checkbox2">
            </div>
            </td>
            <td class="align-middle"><a href="#" class="edit-symbol">&#128465;</a></td>
        </tr>
        <tr>
            <td>Feed Luna</td>
            <td>31/12/2024</td>
            <td>Dad</td>
            <td>Household</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur enim quam, dictum vitae porta et, tempus vel felis. Orci varius</td>
            <td class="align-middle">
            <input class="form-check-input" type="checkbox" value="" id="status-checkbox3">
            </td>
            <td class="align-middle"><a href="#" class="edit-symbol">&#128465;</a></td>
        </tr>
        <tr>
            <td>Reserve a table</td>
            <td>31/12/2024</td>
            <td>Dad</td>
            <td>Going out</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur enim quam, dictum vitae porta et, tempus vel felis. Orci varius</td>
            <td class="align-middle">
            <input class="form-check-input" type="checkbox" value="" class="status-checkbox">
            </td>
            <td class="align-middle"><a href="#" class="edit-symbol">&#128465;</a></td>
        </tr>
    </tbody>
</table>

<button type="button" class="add-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    &#65291;
</button>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        <input type="email" class="form-control" id="EnterTaskTitleInput" placeholder="Enter task title...">
        <span>Choose assignee: </span>
        <select class="form-control" id="TaskAssigneeSelect">
        </select>
        <span>Choose deadline: </span><input type="date" class="form-control" id="DeadlineDatePicker">
        <span>Choose category: </span>
        <select class="form-control" id="AssigneeSelect">
        </select>
        <textarea class="form-control" id="TaskDescriptionTextarea" rows="10" maxlength="50" placeholder="Enter task description..."></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>