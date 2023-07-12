<?php

$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "feedback"; // Replace with your database name

// Create a new MySQLi object and establish a connection
$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error)
{
  die ("connection error" .$conn->connect_error);
}

else
 
// echo "connection succesful"


?>