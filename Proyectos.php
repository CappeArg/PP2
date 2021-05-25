<?php include "includes/headerpublic.php"; ?>

<?php 

include "db.php";

$query = 'SELECT * FROM proyectos WHERE PUBLICADO = "Publicado"';
$resultado = mysqli_query($conexion,$query);

if(isset($resultado)){

    while ($proyecto = mysqli_fetch_array($resultado)){

        echo $proyecto['TITULO'];
        echo '<br>';
        echo $proyecto['FECHA'];
        echo '<br>';
        echo $proyecto['TEXTO'];
        echo '<br>';
        echo $proyecto['IMAGEN'];
        echo '<br>';
        echo $proyecto['ESTADO'];
        echo '<br>';
        echo $proyecto['ARCHIVOS'];
        echo '<br>';
        echo $proyecto['LINKAPORTE'];
        echo '<br>';
        echo '<br>';
}
}
?>

<?php include "includes/footer.php" ?>