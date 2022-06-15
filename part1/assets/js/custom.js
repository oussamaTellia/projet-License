const { ready } = require("jquery");

$(document).ready(function () {
    
    $('.increment-btn').click(function (e) 
    { 
        e.preventDefault();
        
        var qty = $(this).closest('.product-data').find('.qty-input').val();
        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 : value;

        
            value++;
            $(this).closest('.product-data').find('.qty-input').val(value);

        
    }); 


    $('.decrement-btn').click(function (e) 
    { 
        e.preventDefault();
        
        var qty = $(this).closest('.product-data').find('.qty-input').val();
        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 : value;

        if(value > 0)
        {
            value--;
            $(this).closest('.product-data').find('.qty-input').val(value);

        }
    });

    $('.addToCart-btn').click(function (e) { 
        e.preventDefault();

        var qty = $(this).closest('.product-data').find('.qty-input').val();
        var prod_id = $(this).val();

        
        $.ajax({
            method: "POST",
            url: "functions/handlecart.php",
            data: {
                "prod_id": prod_id,
                "prod_qty": qty,
                "scope": "add"
            },
            
            
            success: function (response) {
                if(response == 201)
                {
                    alertify.success("Product added to cart");
                }
                else if(response == 401)
                {
                    alertify.success("Login to continue");
                }
                else if(response == 'existing')
                {
                    alertify.success("Product Already in cart");
                }
                
                else if(response == 500)
                {
                    alertify.success("Something went wrong");
                }
                            }
        });
    });
}); 

