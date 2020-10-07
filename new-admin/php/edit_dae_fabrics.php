<?php
	require("database.php");
	session_start();
	$design_no = $_POST['design_no'];
	$select_query = "SELECT * FROM dayeble_fabric WHERE design_no='$design_no'";
	$response = $db->query($select_query);
	if($data = $response->fetch_assoc())
	{
		$_SESSION['fabrics_type'] = $data['fabric_type'];
		$_SESSION['fabric_name'] = $data['fabric_name'];
		$_SESSION['weave'] = $data['weave'];
		$_SESSION['color'] = $data['design_name_color'];
		$_SESSION['width'] = $data['width'];
		$_SESSION['design_no'] = $data['design_no'];
		$_SESSION['content'] = $data['content'];
		$_SESSION['weight_feel'] = $data['weight_feel'];
		$_SESSION['price'] = $data['price'];
		echo $data['design_no'];
	}
	else{
		echo "failed";
	}

?>