<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Factura</title>
</head>
<body>
  <?php
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];
    $suma=5;
    ?>
    <h3>Datos del Cliente:</h3>
    <?php
    echo "Nombre: ".$nombre.".</br>";
    echo "Apellido: ".$apellido.".</br>";
    echo "Direccion: ".$direccion.".</br>";
    ?>
    <h3>Ingredientes:</h3>
    <?php
    if(!empty($_POST["ingredientes"]) && is_array($_POST["ingredientes"])){
      echo "<ul>";
      foreach ($_POST["ingredientes"] as $ingredientes) {
          echo "<li>";
          echo $ingredientes;
          echo "</li>";
          $suma=$suma+0.5;
      }
      echo "</ul>";
      echo "Precio total de la pizza: ".$suma."€.";
    }
  ?>
</body>
</html>
