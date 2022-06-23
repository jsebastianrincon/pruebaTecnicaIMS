<?php

include '../conexion/conexion.php';

////Metodo recepcion para agregar productos
if (isset($_POST['agregarProducto'])) {

  ///// VARIABLES
  $nombreProducto = $_POST['nombreProducto'];
  $referenciaProducto = $_POST['referenciaProducto'];
  $precioProducto = $_POST['precioProducto'];
  $pesoProducto = $_POST['pesoProducto'];
  $cantidadProducto = $_POST['cantidadProducto'];
  $categoriaProducto = $_POST['categoriaProducto'];
  $fechaCreacion = date('Y-m-d h:i a', time());

  /////Consulta Para validar la existencia de productos en el sistema y evitar referencias repetidas

  $consultaDatosExistentes = $mysqli->query("SELECT * FROM productos WHERE referenciaProducto = '$referenciaProducto'");
  $repiteProducto = mysqli_num_rows($consultaDatosExistentes);

  /////Condicional para la alerta de validacion dado que el producto exista
  if ($repiteProducto > 0) {
    echo
    '<script language="javascript">alert("El producto ya existe");
         window.location.href="../view/listaProductos"</script>';
  } else {
    ///// Consulta para insertar datos en la base de datos
    $insertaDatos = $mysqli->query("INSERT INTO productos(nombreProducto,referenciaProducto,categoriaProducto,precioProducto,pesoProducto,cantidad,fechaCreacion,fechaActualizacion)VALUES('$nombreProducto','$referenciaProducto','$categoriaProducto','$precioProducto','$pesoProducto','$cantidadProducto','$fechaCreacion','NULL') ") or die(mysqli_error($mysqli));
    echo '<script language="javascript">alert("Producto Agregado Exitosamente ");
        window.location.href="../view/listaProductos"</script>';
  }
}

if (isset($_POST['editarProducto'])) {

  ///// VARIABLES
  $idProducto = $_POST['idProducto'];
  $nombreProducto = $_POST['nombreProducto'];
  $referenciaProducto = $_POST['referenciaProducto'];
  $precioProducto = $_POST['precioProducto'];
  $pesoProducto = $_POST['pesoProducto'];
  $cantidadProducto = $_POST['cantidadProducto'];
  $categoriaProducto = $_POST['categoriaProducto'];
  $fechaActualizacion = date('Y-m-d h:i a', time());

  /////// Consulta para actualizar productos
  $actualizaProducto = $mysqli->query("UPDATE productos SET nombreProducto='$nombreProducto',referenciaProducto='$referenciaProducto',precioProducto='$precioProducto',pesoProducto='$pesoProducto',cantidad='$cantidadProducto',fechaActualizacion='$fechaActualizacion',categoriaProducto='$categoriaProducto' WHERE id='$idProducto'") or die(mysqli_error($mysqli));
  echo
  '<script language="javascript">alert("Informacion actualizada exitosamente");
             window.location.href="../view/listaProductos"</script>';
}

if (isset($_POST['eliminarProducto'])) {
  /////Variables
  $idProducto = $_POST['idProducto'];


  /////Consulta para eliminar registro
  $eliminaProducto = $mysqli->query("DELETE FROM productos WHERE id = '$idProducto'");

  echo
  '<script language="javascript">alert("Producto eliminado correctamente");
             window.location.href="../view/listaProductos"</script>';
}
