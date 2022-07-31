<?php
echo "<script> alert('This is a test');</script>";
header('Location: index.html');
session_destroy();
die();
