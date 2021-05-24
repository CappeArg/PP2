<?php include ("db.php")?>
<?php include ("includes/headerproyectos.php")?>
<div class="container p-4">    
    <h1>ABM Proyectos</h1>
</div>

<!-- creo un contenedor de bootstrap que de espacio a todos los lados -->
<div class="container p-6"> 

    <div class="row">

        <div class="col-md-4">
        <?php if (isset($_SESSION['mensaje'])) {?>
<!-- mensaje de alerta por ABM de PROYECTO -->
        <div class="alert alert-<?= $_SESSION['tipo_mensaje']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['mensaje']?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php   session_unset(); } ?>
        
            <div class="card card-body">
                <form action="guardar_proyectos.php" method="POST">
                    <div class="form-group">

                        <input type="text" name="titulo" class="form-control"
                        placeholder="Titulo del Proyecto" autofocus>
                    </div>
                    <br>
                    <div class="form-group">
                        <textarea name="texto" placeholder="Descripción del Proyecto" class="form-control"rows="10"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" name="imagen" class="form-control"
                        placeholder="link-imagen">
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
                        <option value="Publicado">PUBLICADO</option>
                        <option value="Borrador">BORRADOR</option>
                    </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" name="drive" class="form-control"
                        placeholder="Ingrese el link de archivos relacionados en la nube">
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <input type="text" name="Aportar" class="form-control"
                        placeholder="Ingrese el link de Mercado Pago">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-success btn-block" name="guardar_proyecto"
                    value="Publicar Proyecto">

                </form>
            </div>


        </div>

        <div class="col-md-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Fecha Creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            
            <tbody>
            <?php 
            
            $query= "SELECT * FROM proyectos";
            $resultado_proyectos = mysqli_query($conexion, $query);
            
            while($fila=mysqli_fetch_array($resultado_proyectos)){?>

            <tr>
            <td><?php echo $fila['TITULO'];?></td>
            <td><?php echo $fila['FECHA'];?></td>
            <td>
                <a class="btn btn-secondary" href="editar_proyectos.php?id=<?php echo $fila['ID']?>">
                <i class="far fa-edit"></i>
                </a> 
                <a class="btn btn-danger" href="eliminar_proyectos.php?id=<?php echo $fila['ID']?>">
                <i class="far fa-trash-alt"></i>
                </a>
            </td>

            </tr>

            <?php }?>
            </tbody>
        </table>
    </div>

    </div>

</div>



<?php include ("includes/footer.php") ?>
