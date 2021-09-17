<?php include "includes/headerpublic.php"; ?>

<?php 

include "db.php";

$query = 'SELECT * FROM proyectos WHERE PUBLICADO = "Publicado"';
$resultado = mysqli_query($conexion,$query);

if(isset($resultado)){

    while ($proyecto = mysqli_fetch_array($resultado)){?>
        <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img class="card-img-top" src="<?php echo $proyecto['IMAGEN']; ?>" alt="No se cargó ninguna imagen" width="500" height="500">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?php echo $proyecto['TITULO']; ?></h5>
              <p class="card-text"><?php echo $proyecto['TEXTO'];?></p>
              <p class="card-text"><small class="text-muted"><?php echo $proyecto['FECHA']; ?></small></p>
              <?php if ($proyecto['ESTADO']=="Pendiente") {?>
                <button type="button" class="btn btn-success" onclick="window.location = ' <?php echo $proyecto['LINKAPORTE'];?>'" > Contribuir</button>
              <?php }
              else{ ?>
              <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="No admite más aportes!">
                <button class="btn btn-primary" type="button" disabled>Proyecto Concretado!</button>
              </span>
            <?php } ?>
              <button type="button" class="btn btn-warning" onClick="window.location = '<?php echo $proyecto['ARCHIVOS']; ?>'" > + Información</button>


            </div>
          </div>
        </div>
      </div><?php
}
}
?>

<?php include "includes/footer.php" ?>