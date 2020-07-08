<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario PHP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity=sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"" crossorigin="anonymous">
</head>

<body class="bg-info">

<?php
        //Conexion SQL
        include("conexion.php");
        if($conn->connect_errno){
            echo "Ha ocurrido un fallo al conectar a MySQL: (".$conn->connect_errno.")".$conn->connect_error;
        }
  ?>

<div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Registro de Alumnos</h1>
            <?php
                echo "<p class='text-info lead'>".$conn->host_info."</p>";
            ?>
        </div>
    </div>

  <div class="container">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
        <div class="card">
          <div class="card-header">
            <h4>Ingrese sus datos</h4>
          </div>
          <div class="card-body">

            <form name="alta-alumnos" action="alta.php" method="post">
              <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre"/>
              </div>
              <div class="form-group">
                <label for="apellido">Apellido Paterno:</label>
                <input type="text" class="form-control" id="apellido" name="apellido"/>
              </div>
              <input type="submit" class="btn btn-primary" value="Agregar Alumno">
            </form>
            
          </div>
        </div>
      </div>
      <div class="col-3"></div>
    </div>
  </div>

</body>

</html>