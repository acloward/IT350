<?php
define('DBUSER','admin');
define('DBPWD','mydb@123');
define('DBHOST','localhost');
define('DBNAME','secure');
  
try{
   function login($username, $password)
  {
    $conn = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPWD);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT personId, employee FROM UserNames WHERE username=:username and password  = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
    $student = $stmt->fetch(PDO::FETCH_ASSOC);
    if($student){
    	if($student['employee']!=1){
header( 'Location: http://192.168.50.56' ) ;
    	}
    	else{
    		return $student;
    	}
    	
    }
    else{
		header( 'Location: http://192.168.50.56' ) ;
    }
    
  }


  function getAccess($personId)
  {
    $conn = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPWD);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT positionId FROM Employee WHERE personId=:personId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":personId", $personId);
    $stmt->execute();
    $student = $stmt->fetch(PDO::FETCH_ASSOC);
    return $student;
  }

}
}catch(exception $e) {echo $e->getMessage();}

?>