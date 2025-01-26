$(document).ready(function(){
    // adding new category 
    $(document).on("click", "#addCategoryBtn", function(e){
        e.preventDefault();
        
        //getting the name of the category from the modal
        const categoryName = $("#CategoryNameInput").val();

        let is_unique = false;

        // checking if the category already exists
        $.ajax({
            url: "src/categories/is_unique_category.php",
            data: {category_name: categoryName},
            type: "POST",
            success: function(data){
                // if category name is unique, then set is_unique to true
                is_unique = (data == '1' ? true : false);
            },
            error: function(error){ console.log(error); }
        }).done(function(){
            // if is_unique is true
            if(is_unique){
                // close the modal when category is added
                $("#CategoryNameInput").empty();
                $("#modal-add-category").modal("hide");

                //add the new category
                $(document).load("src/categories/add_category.php", {
                    category_name: categoryName
                }, 
                function(){
                    // display already updated categories
                    $("tbody").load("src/categories/display_categories.php");
                });
            }
        });
    });

    //removing category
    $(document).on("click", ".trash-button-category", function(){
        // getting category id
        const categoryId = parseInt($(this).parent().closest("tr").attr("id"));

        let is_free = false;
        // checking wheather the category isn't used in any task
        $.ajax({
            url: "src/categories/is_free_category.php",
            data: {category_id: categoryId},
            type: "POST",
            success: function(data){
                is_free = (data == '1' ? true : false);
            },
            error: function(error){ console.log(error); }
        }).done(function(){
            if(is_free){
                // if it isn't used, then remove it
                $(document).load(
                    "src/categories/remove_category.php",
                    {category_id: categoryId},
                    function(){
                        // display already updated categories
                        $("tbody").load("src/categories/display_categories.php"); 
                    }
                );
            } else{
                alert("This category is still involved in some tasks.");
            }
        });
    });
});
