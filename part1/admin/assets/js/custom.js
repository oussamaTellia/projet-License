
$(document).ready(function () {
    $(document).on('click', '.delete_product_btn', function(e) {

     
        e.preventDefault();
        
        //fetch l id
        var id = $(this).val();
        
        
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover !",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                    $.ajax({ 
                        method: "POST",
                        url: "code.php",
                        data: {
                            'product_id': id,
                            'delete_product_btn':true
                        },
                        dataType: "dataType",
                        success: function (response) {
                            console.log(response);
                            if(response == 200)
                            {
                                swal("Aw Yiss!", "Product Deleted Successfully", "success");
                                $("#product_table").load(location.href + "product_table");
                            }
                            else if (response == 500)
                            {
                                swal("Errr", "Oops, Something Went Wrong", "error");
                            }
                        }
                    });
            } 
          });
        
    });




    $(document).on('click', '.delete_category_btn', function(e){
     
        e.preventDefault();
        
        //fetch l id
        var id = $(this).val();
        
        
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover !",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                    $.ajax({ 
                        method: "POST",
                        url: "code.php",
                        data: {
                            'category_id': id,
                            'delete_category_btn':true
                        },
                        dataType: "dataType",
                        success: function (response) {
                            console.log(response);
                            if(response == 200)
                            {
                                swal("Aw Yiss!", "Category Deleted Successfully", "success");
                                $("#category_table").load(location.href + "category_table");
                            }
                            else if (response == 500)
                            {
                                swal("Errr", "Oops, Something Went Wrong", "error");
                            }
                        }
                    });
            } 
          });
        
    });

});