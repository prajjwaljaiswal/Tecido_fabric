$(document).ready(function(){
	$("#add-cart").submit(function(e){
		e.preventDefault();
		var qty = $("#add-count").val();
		var fabric_name = $(".fabric_name").html();
		var fabric_type = $(".fabric_type").html();
		var weave = $(".weave").html();
		var width = $(".width").html();
		var content = $(".content").html();
		var price = $(".prod-price").html();
		var design_name_color = $(".design_name_color").html();
		var design_no = $(".design_no").html();
		var weight_feel = $(".weight_feel").html();
		var img_url = $("#preview-img").attr("data-image");
		$.ajax({
			type : "POST",
			url : "cart.php",
			data : {
				qty : qty,
				fabric_name : fabric_name,
				fabric_type : fabric_type,
				weave : weave,
				width : width,
				content : content,
				design_name_color : design_name_color,
				design_no : design_no,
				weight_feel : weight_feel,
				img_url : img_url,
				price : price
			},
			success : function(response)
			{
				$("#add-cart-btn").html('Cart Added');
				$("#add-cart-btn").attr("disabled","disabled")
			}
		});
	});
});