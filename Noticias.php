<?php include "includes/headerpublic.php"?>
<?php 

include "db.php";

$query = 'SELECT * FROM noticias';

$resultado = mysqli_query($conexion,$query);

if(isset($resultado)){

    while ($noticia = mysqli_fetch_array($resultado)){?>
        <div class="card mb-3" style="max-width: flex;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="<?php echo $noticia['IMAGEN']; ?>" alt="No se cargó ninguna imagen">
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
<!-- PP2 Carrusel de imágenes -->
<!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/heroimg.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/proyServ.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/proyrenovmueb.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->

<?php include "includes/footer.php"?>