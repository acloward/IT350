<?php
    $op = shell_exec('backup.py');
    echo $op;
?>

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
		<h1>DBA SITE</h1>
		<div style="float:left">
		<div style="margin-left:1%">
    <a href="mysession.php"><button class="mybutton">Admin Site</button></a><br>
    <a href="dbasession.php"><button class="mybutton">DBA site</button></a><br>
  	<a href="logout.php"><button class="mybutton">LogOut</button></a><br>
  </div>
<div style="margin-left:1%">

		<h3>Server Status</h3>
<form action="serverStat.php" method="get">
  <input type="submit" value="Click to run server Status">
</form>
<?php
echo "Today is " . date("Y/m/d") . "<br>";

?>

 <?php
$myfile = fopen("serverstatus.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("serverstatus.txt"));
fclose($myfile);
?> 

		<h3>Run Backup</h3>
<form action="runbackup.php" method="get">
  <input type="submit" value="Click to run back up">
</form>
<h4>Current Backups</h4>

<?php

if ($handle = opendir('../../../backup/sqlbackup')) 
{
    echo "List of Backups in Backup/sqlbackup";
    echo "Entries:\n";

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) 
    {
        echo "$entry\n";
    }
    closedir($handle);
}
?>


</div>


</div>

</body>
</html>	 