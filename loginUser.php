<!DOCTYPE html>
 
<?php
include("dbconnection.php");
session_start();
echo "test 1";
print "<br>";
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $myusername = $_POST['username'];
    $mypassword = $_POST['password'];
$Fmypassword = filter_var($mypassword, FILTER_SANITIZE_STRING);echo "test 1.1";
print "<br>";
    $query = "SELECT * FROM Customer WHERE email = '$myusername' and password = '$Fmypassword'";
    $result = mysqli_query($db,$query);

    $count = mysqli_num_rows($result);
echo "test 1.3";
print "<br>";
    if($count == 1) 
    {
      $_SESSION['username'] = $myusername;
      $_SESSION['active'] = 1;
echo "test 2";
print "<br>";
      $sql = "UPDATE Customer SET active = 1 WHERE email = '$myusername'";
      mysqli_query($db, $sql);
      header("location:usersession.php");
echo "test 2.1";
print "<br>";
    }
    else 
    {  
      header("location:index.html");
      session_unset();
      session_destroy();
    }
}
?>
<html>
<head>
  <meta charset="utf-8">
 
</head>
<body>
<?php include('navbar.php');?>
 <h1> Customer Login page </h1>
  <section class="banner1">
    <form action="loginUser.php" id="loginform" method="post">
      <div class="container">
        <label class="contactfield"><b>Email</b></label>
        <input type="text" placeholder="Username" name="username" required>
        <br>
        <label class="contactfield"><b>Password </b></label>
        <input type="password" placeholder="Password" name="password" required>
        <br>
        <button type="submit">Login</button>
      </div>
    </form>
  </section>
</body>
</html>