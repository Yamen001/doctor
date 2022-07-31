<?php


include_once('connect.php');
if(isset($_POST['sumbit'])){
    $fullname = $con->real_escape_string($_POST['fullname']);
    $username = $con->real_escape_string($_POST['username']);
    $email  = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $con->real_escape_string(md5($_POST['password']));
    $password_confirmation = $_POST['confirm-password'];
    $gender = $_POST['gender'];
}