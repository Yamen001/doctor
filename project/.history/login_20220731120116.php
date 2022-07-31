<?php
  session_start();
  if (isset($_SESSION['ID'])) {
      header("Location:/php/dashboard.php");
      exit();
  }
  // Include database connectivity
    
  include_once('connect.php');
  
  if (isset($_POST['submit'])) {

      $errorMsg = "";
      $username = $con->real_escape_string($_POST['username']);
      $password = $con->real_escape_string(md5($_POST['password']));
      
  if (!empty($username) || !empty($password)) {
        $query  = "SELECT * FROM admins WHERE username = '$username'";
        $result = $con->query($query);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $_SESSION['ID'] = $row['id'];
            $_SESSION['ROLE'] = $row['role'];
            $_SESSION['NAME'] = $row['name'];
            header("Location:/php/dashboard.php'); //working if the username and password is correct
            die();                              
        }else{
          $errorMsg = "No user found on this username";
        } 
    }else{
      $errorMsg = "Username and Password is required";
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
<style>
    .container form .inputcon1{
        width: 100%;
    }
    .container form .inputcon1 .lbl1{
        font-size: 15px;
        margin-left: 16px;
}
.container form .inputcon1 select{
        outline: none;
        color: rgb(121, 121, 121);
        padding: 5px 10px;
        font-size: 12px;
        border: 1px solid #aaa;
    }
    .container form .inputcon1 select option{
        font-size: 13px;
        outline: none;
        margin-bottom: 10px;
    }
</style>
<body>
    <div class="container">
        <form method="post" action="">
            <h2>Login</h2>
            <div class="inputcon">
                <label class="lbl1" for=""><i class="fa-solid fa-user"></i></label>
                <input type="text" name="username" id="" placeholder="Enter your Name">
            </div>
            <div class="inputcon">
                <label class="lbl1" for=""><i class="fa-solid fa-lock"></i></label>
                <input type="password" name="password" id="" placeholder="Enter your password">
            </div>            
            <!-- start modify options for level access -->
            <div class="inputcon1">
                <label class="lbl1" for="">User Situation:</label>
                <select required id="" name = "role">
                    <option name = "patient">Patient</option>
                    <option name = "doctor">Doctor</option>
                </select>
            </div>
            <!-- end modify options for level access -->
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
                    <a href="index.html">Sign up</a> <br> to get the news</h1>
            </div>
        </div>

    </div>
</body>
<script src="./js/main_login.js"></script>

</html>