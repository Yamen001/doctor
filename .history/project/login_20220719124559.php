<?php 

include 'connect.php';

session_start();

error_reporting(0);

if (isset($_SESSION['submit'])) {
    header("Location: index.html");
}

if (isset($_POST['submit'])) {
	$email = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM user_logins WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: index.html");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/login.css">
    <!-- font awosome library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


    <!-- render all elemntes normally -->
    <link rel="stylesheet" href="./css/normalize.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <form method="post">
            <h2>Login</h2>
            <div class="inputcon">
                <label class="lbl1" for=""><i class="fa-solid fa-user"></i></label>
                <input type="text" name="username" id="" placeholder="Enter your Name" required minlength="15" maxlength="20">
            </div>
            <div class="inputcon">
                <label class="lbl1" for=""><i class="fa-solid fa-lock"></i></label>
                <input type="password" name="password" id="" placeholder="Enter your password" required minlength="5">
            </div>
            <a href="" class="forget-pass">forget Password?</a>
            <button type="submit" name="submit">Sign in</button>
            <div class="social-media">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
            </div>
        </form>

        <div class="right">
            <div class="layer">
                <h1>You are New here? <br>
                    <a href="">Sign up</a> <br> to get the news</h1>
            </div>
        </div>

    </div>
</body>
<script src="./js/main_login.js"></script>

</html>