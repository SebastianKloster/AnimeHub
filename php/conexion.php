<?php
 
$host = "localhost";
$user = "c1991871_animes";
$pass = "wazigoFE73";
$bd = "c1991871_animes";

$conexion = mysqli_connect($host,$user,$pass,$bd);

if($conexion){
    echo "conectado correctamente";
}else{
    echo "no se pudo conectar";
}


?>