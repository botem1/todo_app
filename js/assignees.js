$(document).ready(function(){
    // adding new assignee
    $(document).on("click", "#addAssigneeBtn", function(e){
        e.preventDefault();

        // getting the name of the assignee from the modal
        const assigneeName = $("#AssigneeNameInput").val();

        // checking if the assignee already exists
        $.ajax({
            url: "src/assignees/is_unique_assignee.php",
            data: {assignee_name: assigneeName},
            type: "POST",
            success: function(data){
                is_unique = (data == '1' ? true: false);
            },
            error: function(error){ console.log(error); }
        }).done(function(){
            if(is_unique){
                // close the modal then assignee is added
                $("#AssigneeNameInput").empty();
                $("#modal-add-assignee").modal("hide");

                // adding new assignee to the database with php
                $(document).load("src/assignees/add_assignee.php", 
                    {assignee_name: assigneeName}, 
                function(){
                    // dispaying already updated assignees with php
                    $("tbody").load("src/assignees/display_assignees.php");
                });
            }
        });
    });

    //removing assignee
    $(document).on("click", ".trash-button-assignee", function(){

        // getting assignee id
        const assigneeId = parseInt($(this).parent().closest("tr").attr("id"));

        let is_free = false;

        // checking wheather the assignee isn't used in any task
        $.ajax({
            url: "src/assignees/is_free_assignee.php",
            data: {assignee_id: assigneeId},
            type: "POST",
            success: function(data){
                is_free = (data == '1' ? true : false);
            },
            error: function(error){ console.log(error); }
        }).done(function(){
            if(is_free){
                // removing assignee from the database with php
                $(document).load(
                    "src/assignees/remove_assignee.php",
                    {assignee_id: assigneeId},
                    function(){
                        // dislaying already updated assignees
                        $("tbody").load("src/assignees/display_assignees.php"); 
                    }
                );
            } else{
                alert("This assignee is still involved in some tasks.");
            }
        });
    });
});
