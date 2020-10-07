<?php
require_once("database.php");
$username = $_POST['username'];
$password = $_POST['password'];
session_start();

$select_query = "SELECT * FROM admin_login";

if($response = $db->query($select_query))
{
    $data = $response->fetch_assoc();
    $db_username = $data['username'];
    $db_password = $data['password'];
    if($username == $db_username)
    {
        if($password == $db_password)
        {
            $_SESSION['username'] = $db_username;
            echo "Login Success";
        }
        else{
            echo "Password Wrong";
        }
    }
    else{
        echo "Username wrong";
    }
}


?>