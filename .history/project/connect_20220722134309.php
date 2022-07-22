<?php

session_start()
$connect = new mysqli('localhost', 'root', '', 'doctor_website');


if (!$connect){
    die(mysqli_error($connect));
}



?>