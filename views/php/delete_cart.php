<?php
require_once("database.php");
$fabric_type = $_POST['fabric_type'];
$fabric_name = $_POST['fabric_name'];
$design_no = $_POST['design_no'];
$product_id = $_POST['product_id'];
$delete_query = "DELETE FROM cart WHERE fabric_type = '$fabric_type' && fabric_name = '$fabric_name' && id = '$product_id'";

if($db->query($delete_query))
{
	echo 'success';
}
else{
	echo 'failed';
}

?>