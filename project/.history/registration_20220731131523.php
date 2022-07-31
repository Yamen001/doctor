<?php


include_once('connect.php');
if(isset($_POST['sumbit'])){
    $fullname = $_POST['full-name'];
    $username = $_POST['username'];
    $email  = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $password_confirmation = $_POST['password-confirmation'];
}