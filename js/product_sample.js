$(document).ready(function(){
		var my_pic = document.getElementsByClassName("product-image")[0];
		my_pic.onclick = function(){
			var pic = document.getElementsByClassName("product-img")[0];
			alert(pic.src);
		}
	});