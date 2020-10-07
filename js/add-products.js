$(document).ready(function(){
    $("#add-products").click(function(){
        $.ajax({
            type: "Post",
            url: "../php/add-products.php",
            beforeSend : function(){
                $('.page').html('<h1 class="text-center">Please Wait...</h1>');
            },
            success : function(response){
                    $('.page').html(response);
            }
        });
    });
});