<?php

//iniciamos sesión en la aplicación para guardar datos que permitan mostrar msjes.
session_start();
//crea una sesión o reanuda la actual basada en un identificador de sesión pasado mediante una petición GET o POST,

//Creo la conexión con la Base de Datos, almaceno la conexión en la variable conexión
$conexion= mysqli_connect(
    'localhost',
    'root',
    '',
    'bbddcor'
);

//verifico que la base de datos se conecte correctamente
// if(isset($conexion)){
//     echo "la base de datos está conectada";
// }
?>