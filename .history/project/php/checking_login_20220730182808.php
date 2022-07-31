<?php  
session_start();
include "../connect.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {
	if($_SESSION['role'] == 'patient'){
		header("Location: ../patient.php");
	}else if($_SESSION['role'] == 'doctor'){
		header("Location: ../doctor.php");
	}
} else {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['role'];
	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND role = '$role'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$count = mysqli_num_rows($result);

	echo "<script>alert('Username or password is incorrect!');</script>";
}
	// else if($_SESSION['role'] == 'doctor'){
    //     header("Location: ../doctor.php");
    // }
    //     echo "runs";
    // }

		// $_SESSION['username'] = $username;
		// $_SESSION['role'] = $role;


?>