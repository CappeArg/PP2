<?php
include "db.php"; 

    if (isset ($_POST['guardar_proyecto'])){

        $titulo = $_POST['titulo'];
        $cuerpoproy = $_POST['texto'];
        $imagen = $_POST['imagen'];
        $publicacion = $_POST['publicacion'];
        $estado = $_POST['estado'];
        $archivos = $_POST['drive'];
        $linkaporte = $_POST['Aportar'];
        echo "$titulo";
        echo "$cuerpoproy";
        echo "$imagen";
        echo "$publicacion";
       echo "$estado";
       echo "$linkaporte";

       $query = "INSERT INTO proyectos(TITULO, TEXTO, IMAGEN, ESTADO, PUBLICADO, ARCHIVOS, LINKAPORTE) VALUES ('$titulo','$cuerpoproy','$imagen','$publicacion','$estado', '$archivos', '$linkaporte')";
       $result= mysqli_query($conexion,$query);
       if(!$result){
           die("La consulta falló");
       }
       else{
            $_SESSION["mensaje"] = "Proyecto guardado correctamente";
            $_SESSION["tipo_mensaje"] ="success";

            header("location: crud_proyectos.php");
       }


    }


?>