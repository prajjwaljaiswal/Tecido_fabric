<?php
require_once("database.php");
$username = $_POST['username'];
$total_price = $_POST['total_price'];
$id = $_POST['id'];

$insert_query = "INSERT INTO proceed_order(username,product_id,total_price)VALUE('$username', '$id', '$total_price')";

if($db->query($insert_query))
{
	$delete_cart = "DELETE FROM cart WHERE username = '$username'";
	if($db->query($delete_cart))
	{
		echo "Order add Success";
	}
	
}
else{
	echo "Order failed";
}

?>


