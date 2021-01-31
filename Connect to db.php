<?php

$servername = "localhost";
$username = "root";
$password = "root";   // Sometimes $password = "";

// create connection only to SQL
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) { 
    die("Connection failed : ". $conn->connect_error);  // die hereitself 
}
echo "Connected Successfully";

?>