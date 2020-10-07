<?php
require_once("dynamic_pages/database.php");
$name = $_POST['name'];
$brand = $_POST['brand'];
$email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];
$city = $_POST['city'];


$check_table = "SELECT * FROM add_user_data";

if($db->query($check_table))
{
    $insert_data = "INSERT INTO add_user_data(name,brand,email,num_ber,city,address)VALUES('$name','$brand', '$email', '$number', '$city', '$address')";
    $response = $db->query($insert_data);
    if($response)
    {
        echo "success";
    }
    else{
        echo "Failed !";
    }
}
else{
    echo "Something went wrong !!!";
}

?>