<?php
session_start();




session_destroy();
session_start();
$_SESSION['user_err']="successfully Logout";
header ("Location: index.php");



?>