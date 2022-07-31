<?php

session_start();
session_destroy();
sesstion_unset($_SESSION['username']);
sesstion_unset($_SESSION['role']);
sesstion_unset($_SESSION['id']);
die();