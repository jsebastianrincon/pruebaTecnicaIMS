<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Ventas</title>
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
    <h2>Ventas</h2>
    <br>
  </center>

  <div>
    <div class="col-9">
      <div class="row">
        <div class="col-sm-3">
          <form action="agregarProducto" method="POST">
            &nbsp;&nbsp;<button type="submit" name="" class=" btn btn-primary">+ Agregar Producto</button>
          </form>
        </div>
        <div class="col-sm-3">
          <form action="agregarVentas" method="POST">
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
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Fecha</th>
          </tr>
        </thead>
        <tbody>
          <?php

          require_once '../conexion/conexion.php';
          $acentos = $mysqli->query("SET NAMES 'utf8'");

          $consultaDatos = $mysqli->query("SELECT * FROM ventas") or die(mysqli_error($mysqli));
          while ($row = $consultaDatos->fetch_assoc()) {
            $idEdit = $row['id'];
            echo "<tr>";
            $consultaDatosProducto = $mysqli->query("SELECT * FROM productos WHERE id='$idEdit'");

            echo "<td style='text-align:center;'>" . utf8_decode($row['id']) . "</td>";
            echo "<td style='text-align:center;'>" . utf8_decode($row['idProducto']) . "</td>";
            echo "<td style='text-align:center;'>" . utf8_decode($row['cantidad']) . "</td>";
            echo "<td style='text-align:center;'>" . (utf8_decode($row['fechaCompra'])) . "</td>";
          }


          ?>
        </tbody>
      </table>
    </center>

  </div>

</body>

</html>