<?php
session_start();
require_once __DIR__."./conexion.php";
$username = $_POST['username'];
$password = $_POST['password'];


$q = "SELECT COUNT(*) as contar from usuarios where username = '$username' and password = '$password'";
$consulta = mysqli_query($conexion,$q);


$array = mysqli_fetch_array($consulta);


if($array['contar']>0){
    $_SESSION['username'] = $username;
    header("location:../../index.php");
}else{
    echo'<script type="text/javascript">
    alert("ERROR");
    </script>';

    header("location:../../index.php");
}


?>