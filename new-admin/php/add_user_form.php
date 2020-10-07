<?php
require_once("database.php");
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];
$password = $_POST['password'];
$name_client = $_POST['name_client'];

$check_table = "SELECT * FROM admin_data";

if($db->query($check_table))
{
    $insert_data = "INSERT INTO admin_data(name,email,num_ber, address, pass_word,name_client)VALUES('$name', '$email', '$number', '$address', '$password', '$name_client')";
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