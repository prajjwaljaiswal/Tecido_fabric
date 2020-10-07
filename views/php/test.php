<?php
foreach(scandir(getcwd()."/../../new-admin/php/uploadFiles/Nylon/Best Nylon/1234_283/") as $data)
	{

		if(filetype("../../new-admin/php/uploadFiles/Nylon/Best Nylon/1234_283/".$data) == "file")
		{
			print_r($data);
		}
	}

?>