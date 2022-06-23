<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Productos</title>
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
  <form action="listaProductos.php" method="POST">
    &nbsp;&nbsp; <button type="submit" name="" class=" btn btn-primary"> > Listar Productos</button>
    <br>
    <br>
  </form>
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">REGISTRO DE PRODUCTOS</h5>
      <br>
      <form action="../controller/controllerProductos.php" method="POST">
        <label>Nombre Producto: </label>
        <input type="text" name="nombreProducto" size="25px" placeholder="Ingrese Nombre Producto">
        <br>
        <br>
        <label>Referencia Producto: </label>
        <input type="text" name="referenciaProducto" size="25px" placeholder="Ingrese Referencia Producto" required>
        <br>
        <br>
        <label>Precio Producto: </label>
        <input type="number" name="precioProducto" size="25px" placeholder="Ingrese Precio" required>
        <br>
        <br>
        <label>Peso Producto: </label>
        <input type="number" name="pesoProducto" size="50px" placeholder="Ingrese Peso Producto" required> Kg
        <br>
        <br>
        <label>Cantidad: </label>
        <input type="number" name="cantidadProducto" size="35px" placeholder="Ingrese Cantidad" required>
        <br>
        <br>
        <label>Categoria: </label>
        <input type="text" name="categoriaProducto" size="25px" placeholder="Ingrese Categoria" required>
        <br>
        <br>
        <button type="submit" class="btn btn-primary" name="agregarProducto">Agregar</button>

      </form>
    </div>
  </div>

</body>

</html>