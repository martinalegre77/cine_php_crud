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
    <script>
        function eliminar() {
            let respuesta = confirm('Está seguro que deseas eliminar?');
            return respuesta;
        }
    </script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid"><script src="https://kit.fontawesome.com/c5811f736e.js" crossorigin="anonymous"></script>
            <a class="navbar-brand" href="index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="navbar-brand" href="agregar.php">Agregar Película</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>
    <h1 class="display-4 text-center">Cine <small class="text-primary">'GRAN ODEÓN'</small></h1>
    <br>

    <div class="container text-center">
        <blockquote class="blockquote">
            <h3>Cartelera de la semana</h3>
        </blockquote>
    </div>
        <?php
        require 'conexion.php';
        require 'eliminar.php';
        ?>   
    <div class="col-8 p-4 container-fluid" >
        <table class="table table-light table-bordered border-primary">
            <thead>
                <tr>
                <th scope="col">Título</th>
                <th scope="col">Protagonista</th>
                <th scope="col">Rol Secundario</th>
                <th scope="col">Director</th>
                <th scope="col">Género</th>
                <th scope="col">País</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php

                require('conexion.php');

                try {
                    $sql = 'SELECT * FROM peliculas';
                    $resultado = $conn->query($sql);

                    } catch (PDOException $p) {
                        die("No se ha podido conectar a la Base de Datos" . $p->getMessage());
                    }

                    while ($row = $resultado->fetch(PDO::FETCH_OBJ)):
                ?>
                <tr>
                <td><?php echo $row->nombre; ?></td>
                <td><?php echo $row->protagonista; ?></td>
                <td><?php echo $row->secundario; ?></td>
                <td><?php echo $row->director; ?></td>
                <td><?php echo $row->genero; ?></td>
                <td><?php echo $row->pais; ?></td>
                <td>
                    <a href="modificar.php?id=<?= $row->id_peli ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a onclick="return eliminar()" href="index.php ?id=<?= $row->id_peli ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                </td>
                </tr>
                <?php endwhile; ?></tbody>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>