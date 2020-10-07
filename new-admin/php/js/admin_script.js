 // Add new user form
            
            $("#add-user").submit(function(e){
                e.preventDefault();
                $.ajax({
                    type : "POST",
                    url : "php/add_new_user.php",
                    data : new FormData(this),
                    contentType : false,
                    processData : false,
                    beforeSend : function(){
                        $(".new-btn").html("<i class='fa fa-spinner fa-spin'></i>");
                    },
                    success : function(response){
                        $("#add-user").trigger('reset');
                        $(".new-btn").html("Add This Customer");
                        alert(response);
                    }

                })
            });

// Add Daeyable fabrics

$("#add_dae_fabrics").submit(function(e){
    e.preventDefault();
    
    var banner = document.getElementById('files');
    var banner_img = [];
    if(banner.files.length == 0 || banner.files.length > 4)
    {
        alert("Please upload min 1 or max 4 banner...");
    }
    else{
     $.ajax({
                    type : "POST",
                    url : "php/add_new_dae_fabric.php",
                    data : new FormData(this),
                    contentType : false,
                    processData : false,
                    beforeSend : function(){
                        $(".new-btn").html("<i class='fa fa-spinner fa-spin'></i>");
                    },
                    success : function(response){
                        $("#add-user").trigger('reset');
                        $(".new-btn").html("Add This Customer");
                        alert(response);
                    }

                })
    }

});



// Add Embroadium fabrics

$("#add_emb_fabrics").submit(function(e){
    e.preventDefault();
    
    var banner = document.getElementById('files');
    var banner_img = [];
    if(banner.files.length == 0 || banner.files.length > 4)
    {
        alert("Please upload min 1 or max 4 banner...");
    }
    else{
     $.ajax({
                    type : "POST",
                    url : "php/add_new_emb_fabric.php",
                    data : new FormData(this),
                    contentType : false,
                    processData : false,
                    beforeSend : function(){
                        $(".new-btn").html("<i class='fa fa-spinner fa-spin'></i>");
                    },
                    success : function(response){
                        $("#add-user").trigger('reset');
                        $(".new-btn").html("Add This Customer");
                        alert(response);
                    }

                })
    }

});

// dayeble fabrics edit icon 

$(document).ready(function(){
    $(".edit-icon").each(function(){
        $(this).click(function(){
            var table_row = this.parentElement.parentElement;
            var fabrics_type = table_row.getElementsByTagName('td')[0].innerHTML;
            var fabric_name = table_row.getElementsByTagName('td')[1].innerHTML;
            var weave = table_row.getElementsByTagName('td')[2].innerHTML;
            var color = table_row.getElementsByTagName('td')[3].innerHTML;
            var width = table_row.getElementsByTagName('td')[4].innerHTML;
            var price = table_row.getElementsByTagName('td')[5].innerHTML;
            var design_no = table_row.getElementsByTagName('td')[6].innerHTML;
            var edit_icon = table_row.getElementsByTagName('td')[7].childNodes;
           
            $.ajax({
                type : "POST",
                url : "php/edit_dae_fabrics.php",
                data : {
                    fabrics_type : fabrics_type,
                    fabric_name : fabric_name,
                    weave : weave,
                    color : color,
                    width : width,
                    price : price,
                    design_no : design_no
                },
                beforeSend : function(){
                    edit_icon[1].innerHTML = "<i class='fa fa-spinner fa-spin' style='font-size:25px'></i>";
                },
                success : function(response){
                    edit_icon[1].innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity table-cancel1"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>';
                    console.log(response);
                }
            })
        });
    });
});


// dayeble fabrics edit icon 

$(document).ready(function(){
    $(".dae-delete-icon").each(function(){
        $(this).click(function(){
            var table_row = this.parentElement.parentElement;
            var design_no = table_row.getElementsByTagName('td')[6].innerHTML;
            var delete_icon = table_row.getElementsByTagName('td')[7].childNodes;
            var fabrics_type = table_row.getElementsByTagName('td')[0].innerHTML;
            var fabric_name = table_row.getElementsByTagName('td')[1].innerHTML;
            console.log(fabrics_type+fabric_name+design_no);
            $.ajax({
                type : "POST",
                url : "php/delete_dae_fabrics.php",
                data : {
                    design_no : design_no
                },
                beforeSend : function(){
                    delete_icon[3].innerHTML = "<i class='fa fa-spinner fa-spin' style='font-size:25px'></i>";
                },
                success : function(response){
                    delete_icon[3].innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity table-cancel"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>';
                    if(response.trim() == "delete success")
                    {
                        $(table_row).remove();
                    }
                    else{
                        console.log(response);
                    }

                }
            })
        });
    });
});