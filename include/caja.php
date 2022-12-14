<?php
include_once('conexion.php');
$conectar = conn();
$query = "SELECT * FROM usuario";
$execute=mysqli_query($conectar, $query) or die(mysqli_error($conectar));


?>
<?php
  while ($fila=mysqli_fetch_array($execute)) {
?>
<div class="row row-cols-1 row-cols-md-3 g-4 mx-0 py-4">
  <div class="col">
    <div class="card h-100">
      <img src="<?php echo substr($fila['ruta_imagen'],3)?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-dark"><?php echo $fila['nombre']?></h5>
        <p class="card-text text-dark">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
<?php
}
?>
<!-- <section
    id="caja"
    class="row row-cols-1 row-cols-md-2 row-cols-lg-3 p-2 mx-0">
    <div class="col mb-4 ">
        <article class="post">
            <h2 id="1"><?php echo $fila['nombre']?></h2>
            <!-- <img src="https://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c550.png" width="300"> -->
            <!-- <img src="https://i.pinimg.com/550x/33/2a/be/332abe02e0fcc2c15e6b1f08515368ca.jpg" width="300"/> -->
            <img src="<?php echo substr($fila['ruta_imagen'],3)?>" width="300"/>
            <p>
                estrellas
            </p>
        </article>
    </div>
</section> -->