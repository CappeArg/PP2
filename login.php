<?php
include "db.php";

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];


$query= "SELECT * FROM usuarios";
$consultausuario = mysqli_query($conexion, $query);
$resultado = mysqli_fetch_array($consultausuario);
$clave =$resultado['PASSWORD'];
$nombre = $resultado['USUARIO'];

if($pass == $clave){

    header('location:crud_noticias.php');
}
else{
echo "error pass";
}
 
// Resta desarrollar el encriptado de clave bash, el login y el acceso a determinadas funcionalidades
// mediante el login

?>