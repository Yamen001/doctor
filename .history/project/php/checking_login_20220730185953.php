<?php  
session_start();
include "../connect.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['role'];

	if (empty($username)) {
		echo "Username is required";
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
		}else{
			echo "Login Failed";
		}
	}else if (empty($password)) {
		header("Location: ../index.php?error=Password is Required");
	}else {
        
        $sql = "SELECT * FROM new_users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['password'] === $password && $row['role'] == $role) {
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['role'] = $row['role'];
        		$_SESSION['username'] = $row['username'];
			}
		}
	}
}