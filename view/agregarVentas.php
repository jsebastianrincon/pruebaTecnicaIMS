<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Ventas</title>
</head>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<body style="background-color:#FDF2E9 ;">
  <br>
  <center>
    <h1>CAFETERIA IMS</h1>
    <?php
    date_default_timezone_set('America/Bogota');
    echo $fechaActualizacion = date('Y-m-d h:i a', time());
    ?>
  </center>

  <div class="col-9">
    <div class="row">
      <div class="col-sm-3">
        <form action="listaProductos.php" method="POST">
          &nbsp;&nbsp;<button type="submit" name="" class=" btn btn-primary"> > Listar Productos</button>
        </form>
      </div>
      <div class="col-sm-3">
        <form action="listaVentas.php" method="POST">
          &nbsp;&nbsp;<button type="submit" name="" class=" btn btn-success"> > Listar Ventas</button>
        </form>
      </div>
    </div>
  </div>
  <br>
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">REGISTRO DE VENTAS</h5>
      <br>
      <form action="../controller/controllerVentas.php" method="POST">
        <label>Id Producto: </label>
        <input type="text" name="idProducto" size="25px" placeholder="Ingrese Id del Producto">
        <br>
        <br>
        <label>Cantidad: </label>
        <input type="number" name="cantidadProducto" size="25px" placeholder="Ingrese la cantidad">
        <br>
        <br>
        <button type="submit" class="btn btn-primary" name="venderProducto">Vender</button>

      </form>
    </div>
  </div>

</body>

</html>