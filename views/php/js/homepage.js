$(document).ready(function(){
	$(".image").each(function(){
		$(this).click(function(){
			var design_num = $(this).attr("design-no");
			$.ajax({
				type : "POST",
				url : "product-sample.php",
				data : {
					design_no : design_num
				},
				success : function(response){
					window.location.href = "http://localhost/Tecido/views/product-sample.php";
				}
			});
		});
	});
});