<?php
    include 'conection.php';

    $name = $_POST["name"];
    $age = $_POST["age"];

    $conexion = new Conexion();
    $conex = $conexion->getConexion();
    $create = "INSERT INTO user (name, age) VALUES (?,?);";
    $solicitud = $conex->prepare( $create );

    //Enlazar los parámetros de la consulta con los valores del formulario

    $solicitud->bindParam(1, $name, PDO::PARAM_STR );
    $solicitud->bindParam(2, $age, PDO::PARAM_INT );
    if ($solicitud->execute()) {
        echo "Se registró";
        header("refresh:3, index.html");
    } else {
        echo "Error";
    }
    $solicitud->closeCursor();
    $conexion = null;
?>