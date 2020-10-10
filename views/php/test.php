<?php
	require("database.php");
	$select_query = "SELECT * FROM dayeble_fabric ";
	$response = $db->query($select_query);

	while($data = $response->fetch_assoc())
	{
		echo $data['fabric_type'];
	}

?>