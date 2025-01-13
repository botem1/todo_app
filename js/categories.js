$(document).ready(function(){
    // adding new category 
    $(document).on("click", "#addCategoryBtn", function(e){
        e.preventDefault();

        const categoryName = $("#CategoryNameInput").val();
        console.log(categoryName);

        let is_unique = false;
        $.ajax({
            url: "src/categories/is_unique_category.php",
            data: {category_name: categoryName},
            type: "POST",
            success: function(data){
                console.log(data);
                if(data == '1'){
                    is_unique = true;
                }
            },
            error: function(error){
                console.log(error);
            }
        }).done(function(){
            console.log(is_unique);
            if(is_unique){
                console.log("unique category");

                $("#CategoryNameInput").empty();
                $("#modal-add-category").modal("hide");

                $(document).load("src/categories/add_category.php", {
                    category_name: categoryName
                }, 
                function(){
                    $("tbody").load(
                        "src/categories/display_categories.php",
                        {st: ""},
                        function(){
                        }
                    );
                });
    

            }
        });
        
    });

    //removing category
    $(document).on("click", ".trash-button-category", function(){
        const categoryId = parseInt($(this).parent().closest("tr").attr("id"));

        let is_free = false;
        $.ajax({
            url: "src/categories/is_free_category.php",
            data: {category_id: categoryId},
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
                    "src/categories/remove_category.php",
                    {category_id: categoryId},
                    function(){
                        $("tbody").load(
                            "src/categories/display_categories.php",
                            {},
                            function(){}
                        ); 
                    }
                );
            } else{
                alert("This category is still involved in some tasks.");
            }
        });
    });
});
