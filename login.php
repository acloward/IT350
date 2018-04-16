<?php
echo "test 1";
include "dbconnection.php";
#error_reporting(E_ALL);
#ini_set('display_errors', 1);
session_start();

if(empty($_POST['username']) || empty($_POST['password']))
{
  echo "Your username or password don't contain anything.";  
  echo "test 2";

} 
else 
  {
    echo "test 3";

  $Myusername =$_POST['username'];
  $Mypassword =$_POST['password'];
  $MyusernameNoSlash= stripslashes($Myusername);
  $MypasswordNoSlash = stripslashes($Mypassword);
  print "<br>";
  print $MyusernameNoSlash;
  print $MypasswordNoSlash;
echo "test 4 ";
  $username  = mysqli_real_escape_string($dbconnection, $MyusernameNoSlash);
  $password = mysqli_real_escape_string($dbconnection, $MypasswordNoSlash);
echo "test 4.5 ";
  $sql = "SELECT * FROM Admin WHERE username = ? AND password = ?";
  echo "test 5.1<br>";
  $mystmt = $dbconnection->prepare($sql);
  echo "test 5.2<br>";
  echo "test 5.3<br>";
  print_r($mystmt);
  $mystmt->bind_param("ss", $username, $password);
  $mystmt->execute();
  $result = $mystmt->get_result();
  echo "test 5.4";
    if($row = $result->fetch_assoc())
    {
      $_SESSION['login_user']=$username; 
      $_SESSION['active'] = 1;
      echo "test 6";
      mysqli_query($dbconnection, "UPDATE Admin SET active = 1 WHERE username = '$username' AND password ='$password'");
      header("location:mysessions.php");
    } 
    else 
    {
    echo "Wrong username or password, try again.";
    header("location:index.html");
    } 
  }
?>
