<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
		<?php
		include 'dbconnection.php';
		session_start();
		if($_SESSION['active'] == 0) 
			{
				header("location: index.html");
			}
		?>
		  
</head>
<body>
		<h1>USER SITE</h1>
		<div style="float:left">
		<div style="margin-left:1%">
    <a href="usersession.php"><button class="mybutton">View</button></a><br>
  	<a href="logout.php"><button class="mybutton">LogOut</button></a><br>
  </div>
	<div style="margin-left:10%">
		<h3> Your account information </h3>
		<?php 
			$sql = "SELECT * FROM Customer WHERE cust_id = 4";
			$result = mysqli_query($db,$sql);
			if ($result->num_rows > 0) {
				echo "<table><tr>
				<th>Your ID</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Address</th>
				<th>email</th>
				<th>You are Logged in!</th>
				</tr>";
				while ($row = $result->fetch_assoc()) 
				{
					echo "<tr><td>"
					.$row['cust_id']."</td><td>"
					.$row['name']."</td><td>"
					.$row['phone']."</td><td>"
					.$row['address']."</td><td>"
					.$row['email']."</td><td>"
					.$row['active']."</td></tr>";
				}
			echo "</table>";
			}

			$Csql = "SELECT * FROM Orders";
			$Cresult = mysqli_query($db,$Csql);
			if ($Cresult->num_rows > 0) {
				echo "<table><tr>
				<th>Order ID</th>
				<th>Date</th>

				</tr>";
				while ($Crow = $Cresult->fetch_assoc()) 
				{
					echo "<tr><td>"
					.$Crow['order_id']."</td><td>"
					.$Crow['order_date']."</td></tr>";
				}
			echo "</table>";
			}




			$db->close();
		?>

	</div>




</body>
</html>	 