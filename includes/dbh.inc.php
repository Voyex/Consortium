<?php
//Handles the initial connection to the server

$serverName = "localhost";
$dbUsername = "root";
$dBPassword = "";
$dBName = "login";

//var that stores the mysqli connection info
$conn = mysqli_connect($serverName, $dbUsername, $dBPassword, $dBName);

//Checks tha the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
