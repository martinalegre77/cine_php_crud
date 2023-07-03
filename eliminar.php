<?php

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM peliculas WHERE id_peli = $id";
    $resultado = $conn->query($sql);
    if ($resultado->setFetchMode(PDO::FETCH_ASSOC)) {
        echo '<div class="text-center alert alert-success">Película eliminada correctamente</div>';
    } else {
        echo '<div class="alert alert-danger text-center">Error al intentar eliminar</div>';
    }
}

?>