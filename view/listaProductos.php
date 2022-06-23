<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Productos</title>
</head>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<body style="background-color:#FDF2E9 ;">
  <br>
  <center>
    <h1>CAFETERIA IMS</h1>
    <br>
    <h2>Productos</h2>
    <br>
  </center>

  <div>
    <div class="col-9">
      <div class="row">
        <div class="col-sm-3">
          <form action="agregarProducto.php" method="POST">
            &nbsp;&nbsp;<button type="submit" name="" class=" btn btn-primary">+ Agregar Producto</button>
          </form>
        </div>
        <div class="col-sm-3">
          <form action="agregarVentas.php" method="POST">
            &nbsp;&nbsp;<button type="submit" name="" class=" btn btn-success">+ Agregar Venta</button>
          </form>
        </div>
      </div>
    </div>
    <br>
    <center>
      <table class="table table-head-fixed text-center" id="example">
        <thead>
          <tr>
            <th>Id</th>
            <th>Referencia</th>
            <th>Nombre Producto</th>
            <th>Precio</th>
            <th class='text-left'>Peso(Kg)</th>
            <th>Cantidad</th>
            <th>Categoria</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php

          require_once '../conexion/conexion.php';
          $acentos = $mysqli->query("SET NAMES 'utf8'");

          $consultaDatos = $mysqli->query("SELECT * FROM productos") or die(mysqli_error($mysqli));
          while ($row = $consultaDatos->fetch_assoc()) {
            $idEdit = $row['id'];
            echo "<tr>";
            echo "<td style='text-align:center;'>" . utf8_decode($row['id']) . "</td>";
            echo "<td style='text-align:center;'>" . utf8_decode($row['referenciaProducto']) . "</td>";
            echo "<td style='text-align:center;'>" . utf8_decode($row['nombreProducto']) . "</td>";
            echo "<td style='text-align:center;'>" . '$ ' . number_format(utf8_decode($row['precioProducto'])) . "</td>";
            echo "<td style='text-align:center;'>" . (utf8_decode($row['pesoProducto'])) . ' Kg' . "</td>";
            echo "<td style='text-align:center;'>" . (utf8_decode($row['cantidad'])) . '' . "</td>";
            echo "<td style='text-align:center;'>" . (utf8_decode($row['categoriaProducto'])) . '' . "</td>";
            echo "<form action='editarProducto.php' method='POST'>";
            echo " <td><button type='submit' class='btn btn-block btn-warning btn-sm'> Editar</button></td>";
            echo "<input type='hidden' name='idProducto' value= '$idEdit' >";
            echo "</form>";
            echo "<form action='../controller/controllerProductos.php' method='POST'>";
            echo " <td><button type='submit' name='eliminarProducto' class='btn btn-block btn-danger btn-sm'>Eliminar</button></td>";
            echo "<input type='hidden' name='idProducto' value= '$idEdit' >";
            echo "</form>";
          }


          ?>
        </tbody>
      </table>
    </center>

  </div>

</body>

</html>