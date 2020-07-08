<?php

    require 'conexion.php';

    if (isset($_POST['submit'])){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    

    $insertar1 = "INSERT INTO Usuario (Nombre, Apellido) VALUES ('$nombre','$apellido')";
    

    echo "Alumno registrado correctamente.";
    header('location: index.php');

    }else{
        echo "Método modificado, no se ha enviado el formulario.";
    }
?>