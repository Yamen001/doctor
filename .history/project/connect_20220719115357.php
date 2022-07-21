<?php


$connect = new mysqli('localhost', 'root', '', 'logindb');


if ($connect){
    echo "Connected";
}else{
    die(mysqli_error($connect));
}



?>