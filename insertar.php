<?php

if (!empty($_POST["insertar"])) {

    if (!empty($_POST['titulo']) and !empty($_POST['protagonista']) and !empty($_POST['secundario']) and
    !empty($_POST['director']) and !empty($_POST['genero']) and !empty($_POST['pais']) ) {
        $titulo = $_POST['titulo'];
        $protagonista = $_POST['protagonista'];
        $secundario = $_POST['secundario'];
        $director = $_POST['director'];
        $genero = $_POST['genero'];
        $pais = $_POST['pais'];
        require 'conexion.php';
        $sql = "INSERT INTO peliculas (nombre, protagonista, secundario, director, genero, pais)
                VALUES ('$titulo', '$protagonista', '$secundario', '$director', '$genero', '$pais')";
        $resultado = $conn->query($sql);
    
        if ($resultado->setFetchMode(PDO::FETCH_ASSOC)) {
            echo '<div class="alert alert-success">Pelicula ingresada correctamente</div>';
            header('location:index.php');
        } else {
            echo '<div class="alert alert-danger">Error al intentar ingresar</div>';
        }
        
    } else {
        echo '<div class="alert alert-warning">Hay campos incompletos</div>';
    }
}

?>