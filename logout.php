<?php
  include("dbconnection.php");
  session_start();
  $username = $_SESSION['username'];
  $sql = "UPDATE Admin SET active = 0 WHERE username = '$username'";
  mysqli_query($db, $sql);
  session_destroy();
  header("location:index.html");
?>