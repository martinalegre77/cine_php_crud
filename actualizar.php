<?php

if (!empty($_POST["actualizar"])) {
    $id = $_GET['id'];
    if (!empty($_POST['titulo']) and !empty($_POST['protagonista']) and !empty($_POST['secundario']) and
    !empty($_POST['director']) and !empty($_POST['genero']) and !empty($_POST['pais']) ) {
        $titulo = $_POST['titulo'];
        $protagonista = $_POST['protagonista'];
        $secundario = $_POST['secundario'];
        $director = $_POST['director'];
        $genero = $_POST['genero'];
        $pais = $_POST['pais'];
        $sql = "UPDATE peliculas SET nombre = '$titulo', protagonista = '$protagonista', secundario = '$secundario', 
                director = '$director', genero = '$genero', pais = '$pais' WHERE id_peli = $id";
        $resultado = $conn->query($sql);
    
        if ($resultado->setFetchMode(PDO::FETCH_ASSOC)) {
            header('location:index.php');
        } else {
            echo '<div class="alert alert-danger">Error al intentar ingresar</div>';
        }
        
    } else {
        echo '<div class="alert alert-warning">Hay campos incompletos</div>';
    }
}

?>