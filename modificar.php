<?php

$id = $_GET['id'];
require 'conexion.php';
$sql = "SELECT * FROM peliculas WHERE id_peli = $id";
$resultado = $conn->query($sql);
$row = $resultado->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine.com.ar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid"><script src="https://kit.fontawesome.com/c5811f736e.js" crossorigin="anonymous"></script>
            <a class="navbar-brand" href="index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

        <br>
    <h1 class="display-4 text-center">Cine <small class="text-primary">'GRAN ODEÓN'</small></h1>

        <div class="container-fluid row">
            <form class="col-4 p-3 m-auto" method="POST">
                <h3 class="text-center text-secondary">Modificar Película</h3>
                <?php
                require 'actualizar.php';
                ?> 
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Título Película</label>
                    <input type="text" class="form-control" name="titulo" value="<?= $row->nombre ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Protagonista</label>
                    <input type="text" class="form-control" name="protagonista" value="<?= $row->protagonista ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Rol Secundario</label>
                    <input type="text" class="form-control" name="secundario" value="<?= $row->secundario ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Director</label>
                    <input type="text" class="form-control" name="director" value="<?= $row->director ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Género</label>
                    <input type="text" class="form-control" name="genero" value="<?= $row->genero ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">País</label>
                    <input type="text" class="form-control" name="pais" value="<?= $row->pais ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="actualizar" value="ok">Guardar cambios</button>
            </form>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>