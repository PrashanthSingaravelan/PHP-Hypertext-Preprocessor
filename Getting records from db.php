<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myfirstapp";   // name of the data-base which we want to connect

// Create the connection to the data-base which is inside sql
$conn = new mysqli($servername, $username, $password, $dbname);

// Checking the connection
if ($conn->connect_error) {
    die("Connection failed : " .$conn->connect_error);
}
/*else echo "Connection is successful";*/

$sql = "SELECT user_id, name, email, password FROM userinfo";
$result = $conn->query($sql);  
// Output of the query is stored in the result (i.e 3 records)

if ($result->num_rows > 0) {   
    // If there is some output to the query, then result->num_rows > 0, 
    // If there is no output to the query, then result->num_rows=0

    // Fetching each row one by one
    while($row = $result->fetch_assoc()) {

        // After fetching each row, printing the results        
        echo "User-name : " . $row['name'];
        echo " Email : " . $row['email'];
        echo " Password : " . $row['password'];
        echo "<br>";
    }

} else {   // If there is no output to the query
    echo "0 results";
}

$conn->close();  // After performing all the operations, the data-base connection (i.e $dbname="my_first_app") must be closed

?>




