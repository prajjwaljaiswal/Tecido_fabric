$(document).ready(function(){
    $(".user_nav").on('click', function(){
        $(".user_dropdown").toggleClass("d-none");
    });
});


// add user form 

$(document).ready(function(){
    $("#add_user_form").submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../php/add_user_form.php",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(response){
                alert(response);
            }
        })
    })
})