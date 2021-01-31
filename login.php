<?php

// These are the data given from app to php
$email_id = $_GET["email"];
$password_secure = $_GET["password"];

// Setting up the connection to the data-base
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myfirstapp";

// Create connection to the data-base 
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) { 
    die("Connection failed : " .$conn->connect_error);
}
else echo "Data-base is Connected Successfully<br>";

// Query is based on email_id and password_secure given from the app
$sql = "SELECT user_id,name,email,password FROM userinfo where 
email='" .$email_id. "' and password ='" .$password_secure. "';";

// Executing the query and storing the result 
$result = $conn->query($sql);  

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo "Login is Successful";
    }
}

else {
    echo "Login Failed";
}

$conn->close();

?>