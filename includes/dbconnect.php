<?php

$servername = "silva.computing.dundee.ac.uk";
$username = "19ac3u01";
$password = "ac33b2";
$dbname = "19ac3d01";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>