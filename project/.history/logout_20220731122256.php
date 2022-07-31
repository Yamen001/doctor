<?php
echo "<script> alert('This is a test');</script>";

session_destroy();
die();
// header('Location: index.php');