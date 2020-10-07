$(document).ready(function(){
    $("#new-user").click(function(){
        $.ajax({
            type: "Post",
            url: "../php/new_user_page.php",
            beforeSend : function(){
                $('.page').html('<h1 class="text-center">Please Wait...</h1>');
            },
            success : function(response){
                    $('.page').html(response);
            }
        });
    });
});