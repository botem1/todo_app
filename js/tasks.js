$(document).ready(function(){
    // adding new task
    $(document).on("click", "#addTaskBtn", function(e){
        e.preventDefault();

        const taskName = $("#TaskNameInput").val();
        const taskAssignee = $("#TaskAssigneeSelect").find(":selected").text();
        const taskDeadline = Date($("#DeadlineDatePicker").val());
        const taskCategory = $("#TaskCategorySelect").find(":selected").text();
        const taskDescription = $("#TaskDescriptionTextarea").val(); 

        console.log(taskName, taskAssignee, taskDeadline, taskDescription, taskCategory);

        if(isValidTaskName(taskName)) {
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
                success: function(data){ console.log("Task successfully added."); },
                error: function(error) { console.log(error); }
            });
        } else{
            alert("task name is invalid.");
        }
    });


    //removing assignee
    $(document).on("click", ".trash-button-assignee", function(){
        const assigneeId = parseInt($(this).parent().closest("tr").attr("id"));

        let is_free = false;
        $.ajax({
            url: "src/assignees/is_free_assignee.php",
            data: {assignee_id: assigneeId},
            type: "POST",
            success: function(data){
                console.log(data);
                if(data == "1"){
                    is_free = true;
                }
            },
            error: function(error){ console.log(error); }
        }).done(function(){
            if(is_free){
                console.log("after is_free");
                $(document).load(
                    "src/assignees/remove_assignee.php",
                    {assignee_id: assigneeId},
                    function(){
                        $("tbody").load(
                            "src/assignees/display_assignees.php",
                            {},
                            function(){}
                        ); 
                    }
                );
            } else{
                alert("This assignee is still involved in some tasks.");
            }
        });
    });
});
