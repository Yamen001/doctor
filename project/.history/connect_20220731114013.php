<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "tester";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}


<?php

   // Database configuration    
   $hostname = "localhost"; 
   $username = "root"; 
   $password = ""; 
   $dbname   = "tester";
    
   // Create database connection 
   $con = new mysqli($hostname, $username, $password, $dbname); 
    
   // Check connection 
   if ($con->connect_error) { 
       die("Connection failed: " . $con->connect_error); 
   }

?>