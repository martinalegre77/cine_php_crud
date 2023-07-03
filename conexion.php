<?php
    $host = 'localhost';
    $dbname = 'cine';
    $usuario = 'root';
    $pass = '';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $pass);      
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

    catch(PDOException $e)
        {
        echo "La conexión ha fallado: " . $e->getMessage();
            }