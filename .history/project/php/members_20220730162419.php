<?php

if(isset($_SESSION['username']) && isset($_SESSION['role'])){
    if($_SESSION['role'] == 'patient'){
        header("Location: ../patient/home.php");
    }else if($_SESSION['role'] == 'doctor'){
        header("Location: ../doctor/home.php");
    }
}