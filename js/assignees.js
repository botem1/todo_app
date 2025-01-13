$(document).ready(function(){
    // adding new assignee
    $(document).on("click", "#addAssigneeBtn", function(e){
        e.preventDefault();

        const assigneeName = $("#AssigneeNameInput").val();

        let is_unique = false;
        $.ajax({
            url: "src/assignees/is_unique_assignee.php",
            data: {assignee_name: assigneeName},
            type: "POST",
            success: function(data){
                console.log(data);
                if(data == '1'){
                    is_unique = true;
                }
                console.log(is_unique);
            },
            error: function(error){
                console.log(error);
            }
        }).done(function(){
            if(is_unique){
                console.log("unique assignee");

                $("#AssigneeNameInput").empty();
                $("#modal-add-assignee").modal("hide");

                $(document).load("src/assignees/add_assignee.php", {
                    assignee_name: assigneeName
                }, 
                function(){
                    $("tbody").load(
                        "src/assignees/display_assignees.php",
                        {st: ""},
                        function(){
                        }
                    );
                });
    

            }
        });
        
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
