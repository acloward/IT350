<?php
$server = "localhost";
$database = "it350db";
$username = "admin";
$password = "mydb@123";
$db = mysqli_connect($server, $username, $password, $database);
if(!$db){
	die("Database Connection Failed".mysqli_error($db));
}
?> 