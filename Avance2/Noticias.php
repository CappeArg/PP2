<?php include "includes/headerpublic.php"?>
<?php 

include "db.php";

$query = 'SELECT * FROM noticias';

$resultado = mysqli_query($conexion,$query);

if(isset($resultado)){

    while ($noticia = mysqli_fetch_array($resultado)){?>
        <div class="card mb-3">
        <div class="row g-2">
          <div class="col-md-4">
            <img class="card-img-top" src="<?php echo $noticia['IMAGEN']; ?>" alt="No se cargó ninguna imagen" width="500" height="500">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?php echo $noticia['TITULO']; ?></h5>
              <p class="card-text"><?php echo $noticia['TEXTO'];?></p>
              <p class="card-text"><small class="text-muted"><?php echo $noticia['FECHA'] ?></small></p>
            </div>
          </div>
        </div>
      </div><?php
}
}
else{
    die("La consulta fallo");
}

?>



<?php include "includes/footer.php"?>