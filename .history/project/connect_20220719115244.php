<?php


$connect = new mysqli('localhost', 'root', '', 'logingsdb');


if ($connect){
    echo "Connected";
}else{
    die(mysqli_error($connect));
}



?>