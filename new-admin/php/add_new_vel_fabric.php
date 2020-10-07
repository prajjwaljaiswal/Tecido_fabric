<?php
require_once("database.php");
$type = mysqli_real_escape_string($db,"Velvet_Fabric");
$fabric_name =  mysqli_real_escape_string($db,$_POST['fabric_name']);
 $weave =  mysqli_real_escape_string($db,$_POST['weave']);
 $width =  mysqli_real_escape_string($db,$_POST['width']);
 $content =  mysqli_real_escape_string($db,$_POST['content']);
 $design_no =  mysqli_real_escape_string($db,$_POST['design_no']);
 $design_name_color =  mysqli_real_escape_string($db,$_POST['design_name_color']);
 $weight_feel =  mysqli_real_escape_string($db,$_POST['weight_feel']);
  $price =  mysqli_real_escape_string($db,$_POST['price']);
  $files = array_filter($_FILES['upload']['name']);
    $total = count($_FILES['upload']['name']);
   

    if(!file_exists("uploadFiles/".$type."/".$fabric_name."/".$design_no))
{
    $id = rand(1,1000);
    $message = "";
    $design_no = $design_no."_".$id;
    $insert_data = "INSERT INTO vel_fabric(fabric_type,fabric_name,weave,width,content,design_no,desgin_name_color,weight_feel,price)VALUES('$type','$fabric_name','$weave','$width','$content','$design_no','$design_name_color','$weight_feel','$price')";

 if($db->query($insert_data))
 { 

 
  if(!file_exists("uploadFiles/".$type))
    {
        if(mkdir("uploadFiles/".$type))
        {
            if(!file_exists("uploadFiles/".$type."/".$fabric_name))
{
    if(mkdir("uploadFiles/".$type."/".$fabric_name))
    {
        if(mkdir("uploadFiles/".$type."/".$fabric_name."/".$design_no))
        {
            
           // Loop through each file
        for( $i=0 ; $i < $total ; $i++ ) {

          //Get the temp file path
          $tmpFilePath = $_FILES['upload']['tmp_name'][$i];


          //Make sure we have a file path
          if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "uploadFiles/".$type."/".$fabric_name."/".$design_no."/" . $_FILES['upload']['name'][$i];

            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {

              //Handle other code here
                  $message = "success";;
            }
          }
        }
          echo $message;
        }
        else{
            echo "already Exist";
        }
    }
    else{
        echo "failed";
    }
}
else{
     if(!file_exists("uploadFiles/".$type."/".$fabric_name."/".$design_no))
        {
            mkdir("uploadFiles/".$type."/".$fabric_name."/".$design_no);
                      // Loop through each file
        for( $i=0 ; $i < $total ; $i++ ) {

          //Get the temp file path
          $tmpFilePath = $_FILES['upload']['tmp_name'][$i];


          //Make sure we have a file path
          if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "uploadFiles/".$type."/".$fabric_name."/".$design_no."/" . $_FILES['upload']['name'][$i];

            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {

              //Handle other code here
                   $message = "success";;
            }
          }
        }
          echo $message;
        }
        else{
            echo "already Exist";
        }
}

        }
    }
    else{
        if(!file_exists("uploadFiles/".$type."/".$fabric_name))
{
    if(mkdir("uploadFiles/".$type."/".$fabric_name))
    {
        if(mkdir("uploadFiles/".$type."/".$fabric_name."/".$design_no))
        {
            
                      // Loop through each file
        for( $i=0 ; $i < $total ; $i++ ) {

          //Get the temp file path
          $tmpFilePath = $_FILES['upload']['tmp_name'][$i];


          //Make sure we have a file path
          if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "uploadFiles/".$type."/".$fabric_name."/".$design_no."/" . $_FILES['upload']['name'][$i];

            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {

              //Handle other code here
                  $message =  "success";;
            }
          }
        }
          echo $message;
        }
        else{
            echo "already Exist";
        }
    }
    else{
        echo "failed";
    }
}
else{
     if(!file_exists("uploadFiles/".$type."/".$fabric_name."/".$design_no))
        {
            mkdir("uploadFiles/".$type."/".$fabric_name."/".$design_no);
                      // Loop through each file
        for( $i=0 ; $i < $total ; $i++ ) {

          //Get the temp file path
          $tmpFilePath = $_FILES['upload']['tmp_name'][$i];


          //Make sure we have a file path
          if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "uploadFiles/".$type."/".$fabric_name."/".$design_no."/" . $_FILES['upload']['name'][$i];

            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {

              //Handle other code here
                 $message = "success";
            }
          }
        }
          echo $message;
        }
        // else{
        //     echo "already Exist";
        // }
}

    }
 
 }
 else{
    echo "data insert failed";
 }
}
else{
    echo "Product design no ".$design_no." already exist";
}

 



 


?>