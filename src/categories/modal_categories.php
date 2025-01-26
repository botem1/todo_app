<div class="modal fade" id="modal-add-category" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">New category</h1>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control" id="CategoryNameInput" placeholder="Enter category name...">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="addCategoryBtn">Add</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="add-button" data-bs-toggle="modal" data-bs-target="#modal-add-category">
    &#65291;
</button>