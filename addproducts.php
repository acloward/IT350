<?php
include("dbconnection.php");	
	if($db->connect_error)
	{
		die("Database Connection Failed".$db->connect_error);
	}
	$sql = "INSERT INTO Product (p_id,p_name,p_type,p_color,p_weight) VALUES (?,?,?,?,?)";
	$p_id = mysqli_real_escape_string($db, $_POST['pid']);
	$p_name = mysqli_real_escape_string($db, $_POST['pname']);
	$p_type = mysqli_real_escape_string($db, $_POST['ptype']);
	$p_color = mysqli_real_escape_string($db, $_POST['pcolor']);
	$p_weight = mysqli_real_escape_string($db, $_POST['pweight']);
	$statement = mysqli_stmt_init($db);
	if(!mysqli_stmt_prepare($statement,$sql)) 
	{
		echo "SQL Failed";
	}
	else 
	{
		mysqli_stmt_bind_param($statement, "mytest", $p_id, $p_name, $p_type, $p_color, $p_weight);
		mysqli_stmt_execute($statement);
	}
	header("Location:../addproductsform.php");
?>