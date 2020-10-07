$(document).ready(function(){
    $(".validate-form").submit(function(e){
        e.preventDefault();
        var username = $("#username").val();
        var password = $("#password").val();
        $.ajax({
            type: "Post",
            url : "php/user_login.php",
            data : {
                username : username,
                password : password
            },
            beforeSend : function(){
               $(".login100-form-btn").html('<i class="fa fa-spinner fa-spin" style="font-size:20px;"></i>');
               $(".validate-form").trigger('reset');
            },
            success : function(response){
                if(response.trim() == "Login Success")
                {
                    var info = '<div class="alert alert-success alert-dismissible  my-3"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Success!</strong></div>';
                    $(".login100-form-btn").html('LOGIN');
                    $(".info-alert").html(info);
                }
                else
                {
                    var info = '<div class="alert alert-warning alert-dismissible  my-3"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>'+response+'</strong></div>';
                    $(".login100-form-btn").html('LOGIN');
                    $(".info-alert").html(info);   
                }
            }
        }); 
    });
});