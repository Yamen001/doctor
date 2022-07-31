<?php

session_start();
// Include database connection file
include_once('../connect.php.php');

if (!isset($_SESSION['ID'])) {
    header("Location:login.php");
    exit();
}

?>
<style type="text/css">
    .logout_link{
        float: right;
        margin-right: 10px;
    }
    a{
        text-decoration: none;
        color: black;
    }
</style>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>dashboard for doctor</title>
    </head>
       <body>
        <a class="logout_link" href="logout.php">Hi, <?php echo ucwords($_SESSION['NAME']); ?> Log out</a></body>
        </html>