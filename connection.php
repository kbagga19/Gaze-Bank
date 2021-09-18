<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "Bagga19@";
$database = "gazebank";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

if($conn)
{
    // Connection Successful
}

else {
    die("Connection to this database failed due to: " . mysqli_connect_error());
}
?>