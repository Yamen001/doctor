<?php


$connect = new mysqli('localhost', 'root', '', 'logingsdb');


if ($connect){
    echo "Connected";
}else{
    die("Connection failed");
}