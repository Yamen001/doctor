<?php  
session_start();
include "../db_connect.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	// function test_input($data) {
	//   $data = trim($data);
	//   $data = stripslashes($data);
	//   $data = htmlspecialchars($data);
	//   return $data;
	// }

	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['role'];

	if (empty($username)) {
		header("Location: ../login.php?error=User Name is Required");
	}else if (empty($password)) {
		header("Location: ../login.php?error=Password is Required");
	}else {

		// Hashing the password
		// $password = md5($password);
        
        $sql = "SELECT * FROM new_users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['password'] === $password && $row['role'] == $role) {
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['role'] = $row['role'];
        		$_SESSION['username'] = $row['username'];

        		header("Location: ../main.html");

        	}else {
        		header("Location: ../login.php?error=Incorect User name or password");
        	}
        }else {
        	header("Location: ../login.php?error=Incorect User name or password");
        }

	}
	
}else {
	header("Location: ../login.php");
}