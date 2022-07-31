<?php  
session_start();
include "../connect.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['role'];

	if (empty($username)) {
		echo '<script>alert("Please enter your username");</script>';
		header("Location: ../login.php");
	} else if (empty($password)) {
		echo "Password is required";
	} else if (empty($role)) {
		echo "Role is required";
	} else {
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND role = '$role'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if (mysqli_num_rows($result) > 0) {
			$_SESSION['username'] = $username;
			$_SESSION['role'] = $role;
			echo "Login Success";
		} else {
			echo "Login Failed";
		}
		}
	}