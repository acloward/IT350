<!DOCTYPE HTML>

<html>
	<head>
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
    <a href="test.php"><button>Butotn 1</button></a><br>
    <a href="test2.php"><button>Button 2</button></a><br>
  	<a href="test3.php"><button>Button 3</button></a><br>
  	<a href="logout.php"><button>LogOut</button></a><br>

<h1>You are logged in!!!!</h1>

	</body>
</html>