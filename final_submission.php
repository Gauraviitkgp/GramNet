<?php
 
require 'connection.php';
$conn    = Connect();
$UID    = $conn->real_escape_string($_POST['UID']);

$query   = "INSERT into data (UID,Latitude,Longitude) VALUES('" . $UID . "','76','25')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Contacting Us <br>";
 
$conn->close();
 
?>