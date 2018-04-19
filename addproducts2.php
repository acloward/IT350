 

 <?php

include("dbconnection.php");	
$servername = "localhost";
$username = "admin";
$password = "mydb@123";
$dbname = "it350db";
$myusername = $_POST['username'];

	$p_id = $_POST['pid'];
	$p_name = $_POST['pname'];
	$p_type = $_POST['ptype'];
	$p_color = $_POST['pcolor'];
	$p_weight = $_POST['pweight'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Product (p_id, p_name, p_type, p_color, p_weight)
VALUES ('$p_id', '$p_name', '$p_type', '$p_color', '$p_weight')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

	header("Location:../addproductsform.php");
?>