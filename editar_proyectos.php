<?php 
include "db.php";

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $query = "SELECT * FROM proyectos WHERE ID = '$id'";
    $resultado = mysqli_query($conexion,$query);

    if(mysqli_num_rows($resultado)== 1){
        $fila = mysqli_fetch_array($resultado);
        $titulo = $fila['TITULO'];
        $cuerpoproy = $fila['TEXTO'];
        $imagen = $fila['IMAGEN'];
        $publicacion = $fila['PUBLICADO'];
        $estado = $fila['ESTADO'];
        $archivos = $fila['ARCHIVOS'];
        $linkaporte = $fila['LINKAPORTE'];

    }
}

if (isset($_POST['actualizar'])) {
    $id = $_GET['id'];
    $titulo = $_POST['titulo'];
    $cuerpoproy = $_POST['texto'];
    $imagen = $_POST['imagen'];
    $publicacion = $_POST['publicacion'];
    $estado = $_POST['estado'];
    $archivos = $_POST['drive'];
    $linkaporte = $_POST['Aportar'];

    $query = "UPDATE proyectos SET TITULO = '$titulo', TEXTO = '$cuerpoproy', IMAGEN = '$imagen', PUBLICADO = '$publicacion', ESTADO = '$estado', ARCHIVOS = '$archivos', LINKAPORTE = '$linkaporte' WHERE ID = '$id'";
    $resultado = mysqli_query($conexion,$query);
    
    if(!$resultado){
        die("La consulta falló");
    }
    else{
         $_SESSION["mensaje"] = "Proyecto modificado correctamente";
         $_SESSION["tipo_mensaje"] ="success";

         header("location: crud_proyectos.php");
        }
}
?>

<!-- armo la página para crear nuevamente el formulario con los datos a editar -->
<?php include "includes/headerproyectos.php"; ?>

<div class="container p-4"> 

     <div class="row">
         <div class="col-md-4 mx-auto">

         <div class="card card-body">
         <h1>Editar Proyecto</h1>
                <form action="editar_proyectos.php?id=<?php echo $id ?>" method="POST">
                    <div class="form-group">

                        <input type="text" name="titulo" class="form-control"
                        placeholder="Actualizar Titulo" value="<?php echo $titulo; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <textarea name="texto" placeholder="Actualizar Descripción del Proyecto" class="form-control"rows="10"><?php echo $cuerpoproy?></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" name="imagen" class="form-control" value="<?php echo $imagen; ?>"
                        placeholder="Actualice el link de la imagen">
                    </div>
                    <br>
                    <div class="form-group">
                    <p>Estado del Proyecto<p>
                    <select class="form-control" name="estado">
                        <option value="Pendiente">PENDIENTE</option>
                        <option value="Concretado">CONCRETADO</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <p>Publicación: </p>
                    <select class="form-control" name="publicacion">
                        <option value="Borrador">BORRADOR</option>
                        <option value="Publicado">PUBLICADO</option>    
                    </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" name="drive" class="form-control" value="<?php echo $archivos; ?>"
                        placeholder="Ingrese el link de archivos relacionados en la nube">
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <input type="text" name="Aportar" class="form-control" value="<?php echo $linkaporte; ?>"
                        placeholder="Ingrese nuevo link de Mercado Pago">
                    </div>
                    <br>
                    <button class="btn btn-success" name="actualizar">
                    ACTUALIZAR
                    </button>

                </form>
         </div>
            
            </div>


        </div>



<?php include "includes/footer.php"; ?>