<?php
    include("./include/header.php");
?>
<!DOCTYPE html>
<section class="row row-cols-1 row-cols-md-1 p-2 mx-0">
    <div class="position-absolute bottom-30 start-50 translate-middle-x">
        <div class="col mb-4 ">
            <article class="post">
                <!-- PRUEBA -->
                <div class="container">
                    <!-- <h2>PROGRESO DEL ARCHIVO</h2>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> -->
                    <form action="./include/action.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group py-4">
                            <label for="">Nombres de archivo</label>
                            <input type="text" class="form-control" placeholder="Actividar" name="nombres">
                            <p class="py-0,7"></p>
                            <input type="file" name="imagen" class="form-control py-2">
                            <p>
                                <button type="submit" name="enviar" class="enviar btn btn-danger">Enviar</button>
                            </p>
                        </div>
                    </form>
                </div>
            </article>
        </div>
    </div>
</section>

</html>