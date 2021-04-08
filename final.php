<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "iwp";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
$sql="SELECT * FROM `amb` WHERE `SNO`=3";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo $row['Amb No.']." will arrive";
$sql="UPDATE `amb` SET `Status` = 'NA' WHERE `SNO` = 3";
$result = mysqli_query($conn, $sql);
?>