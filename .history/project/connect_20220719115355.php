<?php


$connect = new mysqli('localhost', 'root', '', 'loginsdb');


if ($connect){
    echo "Connected";
}else{
    die(mysqli_error($connect));
}



?>