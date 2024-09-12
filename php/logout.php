<?php 
include_once './login.php';
 unset($_SESSION['username']);
 $_SESSION['username'] = '';
 session_destroy();
 header("Location:../../index.php");

?>