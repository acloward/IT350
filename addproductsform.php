<!DOCTYPE html>
<?php
include ("dbconnection.php");
session_start();

	if(!(isset($_SESSION['active']) && $_SESSION['active'] != '')) 
	{
	    header("location: login.php");
	}
?>

<html>
<head>
	<div class="w3-container w3-black">
  		<h1>Admin Product page</h1>
	</div>
</head>	
<body>


    <a href="mysession.php"><button class="mybutton">View</button></a><br>
    <a href="addproductsform.php"><button class="mybutton">Product</button></a><br>
  	<a href="logout.php"><button class="mybutton">LogOut</button></a><br>

	<div style="margin-left:25%;width:25%">
<?php 
			$sql = "SELECT * FROM Product";
			$result = mysqli_query($db,$sql);
			if ($result->num_rows > 0) {
				echo "<table><tr>
				<th>Product ID</th>
				<th>Name</th>
				<th>Type</th>
				<th>Color</th>
				<th>Weight</th>
				</tr>";
				while ($row = $result->fetch_assoc()) 
				{
					echo "<tr><td>"
					.$row["p_id"]."</td><td>"
					.$row['p_name']."</td><td>"
					.$row['p_type']."</td><td>"
					.$row['p_color']."</td><td>"
					.$row['p_weight']."</td><tr>";
				}
			echo "</table>";
			}

			$db->close();
?>
<br>
	</div>
	<div style="margin-left:25%">
		<div style="align:center;display:inline-block;background-color:#006400;color:White;width:15%;">
			<form action="addproducts2.php" method="post">
				<fieldset>
					Product ID:<br>
					<input type="text" name="pid"><br>
					Product Name:<br>
					<input type="text" name="pname"><br>
					Product Type:<br>
					<input type="text" name="ptype"><br>
					Product Color:<br>
					<input type="text" name="pcolor"><br>
					Product Weight:<br>
					<input type="text" name="pweight"><br>				
				</fieldset>
				<button type="submit" >Add Product</button>
			</form>
		</div>

</div>
</body>
</html>