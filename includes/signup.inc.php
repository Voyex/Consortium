<?php
// Defined as constants so that they can't be changed
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'consortium_people');
// $dbc will contain a resource link to the database
// @ keeps the error from showing in the browser
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
echo "Connection Successful";


$sql = "INSERT INTO people (Name, Email, Password) 
                    VALUES ('" .$_POST["username"]."', '".$_POST["email"]."', '" .$_POST["password"]."')";

if(mysqli_query($dbc, $sql)){
    echo "<br> Records inserted successfully.";
} else{
    echo "<br> ERROR: Could not able to execute $sql. ";
}

?>

