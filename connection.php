<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$db_name = "db";
$conn = new mysqli($servername, $username, $password, $db_name);
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
echo "";

?>