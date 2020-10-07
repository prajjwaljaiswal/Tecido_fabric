$(document).ready(function(){
   $("#toggle-password").click(function(){
         if($("#toggle-password").val() == "on")
    {
        document.getElementById("password").type = "text";
        document.getElementById("toggle-password").value = "off";
    }
    else{
        document.getElementById("password").type = "password";
        document.getElementById("toggle-password").value = "on";
    }
   })
});

$(document).ready(function(){
    $("#admin_form").on('submit', function(e){
        e.preventDefault();
        var username = $("#username").val();
        var password = $("#password").val();
        $.ajax({
            type: 'POST',
            url: 'php/admin_login.php',
            data : {
                username : username,
                password : password
            },
            success : function(response){
                if(response.trim() == "Login Success")
                {
                    location.href = "http://localhost/Tecido/views/homepage.php";
                }
                else{
                    alert(response);
                }
            }
        })
    });
});