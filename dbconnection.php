<?php
#echo "dbconnection.php page";
$mydbhost = 'localhost';
$mydbuser = 'admin';
$mydbpassword = 'mydb@123';
$mydbname = 'it350db';
$dbonnection = new mysqli($mydbhost, $mydbuser, $mydbpassword, $mydbname) or die('Error while trying to connect.');
?>