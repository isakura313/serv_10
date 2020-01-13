<?php
// $name = key($_COOKIE);

// setcookie($name);
session_start();
session_destroy();
print_r($_COOKIE);
header("Location:/serv_10/main.php"); 
?>