<?php
include "db.php";

if(isset($_GET['id'])){

    $id= $_GET['id'];
    $query = "DELETE FROM proyectos WHERE ID = '$id'";
    $result= mysqli_query($conexion,$query);
}
if(!$result){
    die("La consulta falló");
}
else{
     $_SESSION["mensaje"] = "Proyecto eliminado correctamente";
     $_SESSION["tipo_mensaje"] ="danger";

     header("location: crud_proyectos.php");
}


?>