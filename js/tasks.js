$(document).ready(function () {
	//confetti
	$(document).on("change", ".task-status-checkbox", function () {
		if ($(".task-status-checkbox").is(":checked")) {
            // if checkbox is checked make confetti visible
			$("#confetti-container").css("display", "block");

            // wait 2s and make it invisible again
			setTimeout(function () {
				$("#confetti-container").css("display", "none");
			}, 2000);

		}
	});

	// adding new task
	$(document).on("click", "#addTaskBtn", function (e) {
		e.preventDefault();

        // getting task info from the modal
		const taskName = $("#TaskNameInput").val();
		const taskAssignee = parseInt($("#TaskAssigneeSelect").find(":selected").attr("id"));
		const taskDeadline = document.getElementById("DeadlineDatePicker").value;
		const taskCategory = parseInt($("#TaskCategorySelect").find(":selected").attr("id"));
		const taskDescription = $("#TaskDescriptionTextarea").val();

        // if task name doesn't contain special symbols and the date is valid
		if (isValidTaskName(taskName) && taskDeadline) {

            //adding task to the database with php
			$.ajax({
				url: "src/tasks/add_task.php",
				data: {
					task_name: taskName,
					task_assignee: taskAssignee,
					task_deadline: taskDeadline,
					task_category: taskCategory,
					task_description: taskDescription,
				},
				type: "POST",
				success: function (data) { console.log(data); },
				error: function (error) { console.log(error); },
			}).done(function () {
                // make modal disapear when the task is added
				$("#modal-add-task").modal("hide");
				$("tbody").load("src/tasks/display_tasks.php");
			});
		} else {
			alert("Task is invalid.");
		}
	});

    // removing task
	$(document).on("click", ".trash-button-task", function () {
        // getting task id
		const taskId = parseInt($(this).parent().closest("tr").attr("id"));

        // removing the task from the database with php
		$(document).load(
			"src/tasks/remove_task.php",
			{ task_id: taskId },
			function () {
				$("tbody").load(
					"src/tasks/display_tasks.php",
					{},
					function () {}
				);
			}
		);
	});
});
