<?php  
session_start();
include "../connect.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['role'];
	$sql = "SELECT * FROM new_users WHERE username = '$username' AND password = '$password' AND role = '$role'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$count = mysqli_num_rows($result);
	if ($count == 1) {
		// $_SESSION['username'] = $username;
		// $_SESSION['role'] = $role;
		header("Location: ../main.html");  /* this is working for now but its redirected based on existing roles and not lvled */
	} else {
		echo "<script>alert('Username or password is incorrect!');</script>";
	}
}else{
	echo "<script>alert('Please fill in all the fields!');</script>";
}
?>