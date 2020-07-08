<?php

    require 'conexion.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $insertar = "INSERT INTO Usuario (Nombre, Apellido) VALUES ('$nombre','$apellido')";
    $query = mysqli_query($conn,$insertar);

    echo "Alumno registrado.";
    header('location: index.php');

?>
