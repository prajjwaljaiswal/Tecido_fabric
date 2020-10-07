<?php
require("database.php");
session_start();
$username = $_SESSION['username'];
$fabric_type = mysqli_real_escape_string($db,$_POST['fabric_type']);
$fabric_name =  mysqli_real_escape_string($db,$_POST['fabric_name']);
 $weave =  mysqli_real_escape_string($db,$_POST['weave']);
 $width =  mysqli_real_escape_string($db,$_POST['width']);
 $content =  mysqli_real_escape_string($db,$_POST['content']);
 $design_no =  mysqli_real_escape_string($db,$_POST['design_no']);
 $design_name_color =  mysqli_real_escape_string($db,$_POST['design_name_color']);
 $weight_feel =  mysqli_real_escape_string($db,$_POST['weight_feel']);
  $price =  mysqli_real_escape_string($db,$_POST['price']);
  $qty = mysqli_real_escape_string($db,$_POST['qty']);
  $img_url =  mysqli_real_escape_string($db,$_POST['img_url']);

$insert_data = "INSERT INTO cart(username,fabric_type,fabric_name,weave,width,content,design_no,design_name_color,weight_feel,price,qty,img_url)VALUES('$username','$fabric_type','$fabric_name','$weave','$width','$content','$design_no','$design_name_color','$weight_feel','$price','$qty','$img_url')";


 if($db->query($insert_data))
 { 
 	echo "Success";
 }
 else{
 	echo "Cart Failed !";
 }

?>