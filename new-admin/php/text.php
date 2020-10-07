<?php
foreach(scandir(getcwd()."/uploadFiles/Nylon/Best Nylon/1234_283/") as $data)
  {

    if(filetype("uploadFiles/Nylon/Best Nylon/1234_283/".$data) == "file")
    {
      print_r($data);
    }
  }

?>