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
    <a href="addproductsform.php"><button class="mybutton">Orders</button></a><br>
  	<a href="logout.php"><button class="mybutton">LogOut</button></a><br>
  </div>
	<div style="margin-left:10%">
		<?php 
			$sql = "SELECT * FROM Customer";
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

			$db->close();
		?>
	</div>


</div>

</body>
</html>	 