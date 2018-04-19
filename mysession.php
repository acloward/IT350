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
		<h1>ADMIN SITE</h1>
		<div style="float:left">
		<div style="margin-left:1%">
    <a href="mysession.php"><button class="mybutton">View</button></a><br>
    <a href="addproductsform.php"><button class="mybutton">Product</button></a><br>
    <a href="dbasession.php"><button class="mybutton">DBA site</button></a><br>
  	<a href="logout.php"><button class="mybutton">LogOut</button></a><br>
  </div>
	<div style="margin-left:10%">
		<?php 
			$sql = "SELECT * FROM Admin";
			$result = mysqli_query($db,$sql);
			if ($result->num_rows > 0) {
				echo "<table><tr>
				<th>username</th>
				<th>password</th>
				<th>active</th>
				</tr>";
				while ($row = $result->fetch_assoc()) 
				{
					echo "<tr><td>"
					.$row['username']."</td><td>"
					.$row['password']."</td><td>"
					.$row['active']."</td></tr>";
				}
			echo "</table>";
			}

			$Esql = "SELECT * FROM Employee";
			$Eresult = mysqli_query($db,$Esql);
			if ($Eresult->num_rows > 0) {
				echo "<table><tr>
				<th>employeeID</th>
				<th>name</th>
				<th>address</th>
				<th>phone_number</th>
				</tr>";
				while ($Erow = $Eresult->fetch_assoc()) 
				{
					echo "<tr><td>"
					.$Erow['employeeID']."</td><td>"
					.$Erow['name']."</td><td>"
					.$Erow['address']."</td><td>"
					.$Erow['phone_number']."</td></tr>";
				}
			echo "</table>";
			}


			$Csql = "SELECT * FROM Customer";
			$Cresult = mysqli_query($db,$Csql);
			if ($Eresult->num_rows > 0) {
				echo "<table><tr>
				<th>Customer ID</th>
				<th>name</th>
				<th>phone number</th>
				<th>address</th>
				<th>email</th>
				</tr>";
				while ($Crow = $Cresult->fetch_assoc()) 
				{
					echo "<tr><td>"
					.$Crow['cust_id']."</td><td>"
					.$Crow['name']."</td><td>"
					.$Crow['phone']."</td><td>"
					.$Crow['address']."</td><td>"
					.$Crow['email']."</td><td>"
					.$Crow['pwd No show']."</td></tr>";
				}
			echo "</table>";
			}

			$db->close();
		?>
	</div>


</div>

</body>
</html>	 