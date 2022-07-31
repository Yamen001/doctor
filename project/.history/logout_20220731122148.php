<?php

session_destroy();
die();
echo "<script> alert('This is a test');</script>";
header('Location: index.php');