$(document).ready(function(){
    //confetti
    $(document).on("change", ".task-status-checkbox", function(){
            console.log("lalal");
        if($(".task-status-checkbox").is(":checked")){
            console.log("lasal");
            $("#confetti-container").css("display", "block");
            console.log("before");
            setTimeout(function(){
                $("#confetti-container").css("display", "none");
            }, 2000);
            // $("#confetti-container").css("display", "none");
            // console.log("after");
        } 
    });
    // adding new task
    $(document).on("click", "#addTaskBtn", function(e){
        e.preventDefault();

        const taskName = $("#TaskNameInput").val();
        const taskAssignee = parseInt($("#TaskAssigneeSelect").find(":selected").attr("id"));

        const taskDeadline = document.getElementById("DeadlineDatePicker").value;

        // const taskDeadlineYear = taskDeadline.getFullYear();
        // const taskDeadlineMonth = taskDeadline.getMonth() + 1;
        // const taskDeadlineDay = taskDeadline.getDate();
        const taskCategory = parseInt($("#TaskCategorySelect").find(":selected").attr("id"));
        const taskDescription = $("#TaskDescriptionTextarea").val(); 

        console.log(taskName, taskAssignee, taskDeadline, taskDescription, taskCategory);

        if(isValidTaskName(taskName) && taskDeadline) {
            $.ajax({
                url: "src/tasks/add_task.php",
                data: {
                    task_name: taskName,
                    task_assignee: taskAssignee,
                    task_deadline: taskDeadline,
                    task_category: taskCategory,
                    task_description: taskDescription
                },
                type: "POST",
                success: function(data){ console.log(data); },
                error: function(error) { console.log(error); }
            }).done(function(){
                //$("#AssigneeNameInput").empty();
                $("#modal-add-task").modal("hide");

                $('tbody').load("src/tasks/display_tasks.php");
            });
        } else{
            alert("Task is invalid.");
        }
    });


    //removing assignee
    $(document).on("click", ".trash-button-task", function(){
        const taskId = parseInt($(this).parent().closest("tr").attr("id"));
        console.log(taskId);
        $(document).load(
            "src/tasks/remove_task.php",
            {task_id: taskId},
            function(){
                $("tbody").load(
                    "src/tasks/display_tasks.php",
                    {},
                    function(){}
                ); 
            }
        );
        
    });
});
