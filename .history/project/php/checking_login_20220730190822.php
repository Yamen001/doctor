<?php  
session_start();
include "../connect.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['role'];

	if (empty($username)) {
		header("Location: ../login.php");
		echo '<script>alert("Please enter your username");</script>';
	} else if (empty($password)) {
		echo "Password is required";
	} else if (empty($role)) {
		echo "Role is required";
	} else {
		$sql = "SELECT * FROM new_users WHERE role = '$role' AND username = '$username' AND password = '$password'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if (mysqli_num_rows($result) > 0) {
			$_SESSION['username'] = $username;
			$_SESSION['role'] = $role;

			if($_SESSION['role'] == "patient"){
				echo "error for patint";
				// header("Location: ../patient.php");
			}else if($_SESSION['role'] == "doctor"){
				header("Location: ../doctor.php");
			} else {
				header("Location: ../login.php");
			}
		} else {
			echo '<script>alert("Wrong username or password");</script>';
			header("Location: ../login.php");
		}
	}
}