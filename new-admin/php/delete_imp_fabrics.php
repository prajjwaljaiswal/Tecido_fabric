<?php
require_once("database.php");
$design_no = $_POST['design_no'];
$select_query = "SELECT * FROM imp_fabric WHERE design_no='$design_no'";
$response = $db->query($select_query);
if($data = $response->fetch_assoc())
{
	$fabric_type = $data['fabric_type'];
	$fabric_name = $data['fabric_name'];
	$db_design_no = $data['design_no'];
	$message = '';
	foreach(scandir(getcwd()."/uploadFiles/".$fabric_type."/".$fabric_name."/".$db_design_no."/") as $data)
	{

		if(filetype("uploadFiles/".$fabric_type."/".$fabric_name."/".$db_design_no."/".$data) == "file")
		{
			if(unlink("uploadFiles/".$fabric_type."/".$fabric_name."/".$db_design_no."/".$data))
			{
				$message = "success";
			}
			else{
				echo "failed";
			}
		}
	}

	if($message == "success")
	{
		if(rmdir("uploadFiles/".$fabric_type."/".$fabric_name."/".$db_design_no."/"))
		{
			$delete_data = "DELETE FROM imp_fabric WHERE design_no='$design_no'";
				if($db->query($delete_data))
				{
					echo "delete success";
				}
				else{
					echo "delete failed";
				}
		}
	}
	else{
		echo "failed dir";
	}
}
else{
	echo "Failed";
}




?>