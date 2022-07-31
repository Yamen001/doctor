<?php  
session_start();
include "../connect.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['role'];
    
    if(isset($_SESSION['username']) && isset($_SESSION['role'])){
    if($_SESSION['role'] == 'patient'){
        header("Location: ../patient.php");
    }else if($_SESSION['role'] == 'doctor'){
        header("Location: ../doctor.php");
    }