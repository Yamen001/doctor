<?php

session_start()
$connect = new mysqli('localhost', 'root', '', 'loginsdb');


if (!$connect){
    die(mysqli_error($connect));
}



?>