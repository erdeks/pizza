<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pizza</title>
</head>
<body>
  <h1>Pizzeria Aitor</h1>
  <form action="pizza.php" method="post">
    <input name="nombre" placeholder="Nombre: "/></br></br>
    <input name="apellido" placeholder="Apellido: "/></br></br>
    <input name="direccion" placeholder="Direccion: "/></br></br>
    <h4>Elige Ingredientes: </h4>
    <table>
      <tr>
        <td><input type="checkbox" name="ingredientes[]" value="Masa" checked>Masa</input></td>
        <td><input type="checkbox" name="ingredientes[]" value="Oregano" checked>Oregano</input></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="ingredientes[]" value="Queso">Queso</input></td>
        <td><input type="checkbox" name="ingredientes[]" value="Bacon">Bacon</input></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="ingredientes[]" value="Pollo">Pollo</input></td>
        <td><input type="checkbox" name="ingredientes[]" value="Champiñones">Champiñones</input></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="ingredientes[]" value="Tomate">Tomate</input></td>
        <td><input type="checkbox" name="ingredientes[]" value="Aceitunas">Aceitunas</input></td>
      </tr>
    </table>
  </br></br><input name="submit" type="Submit" value="Send"/>
  </form>

  <?php
    if (isset($_POST['submit'])) {
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
      if()
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
    }
  ?>
</body>
</html>
