<?php

$db = new mysqli("localhost", "root", "", "tecido");

if($db->connect_error)
{
    echo "Database connection failed";
}


?>