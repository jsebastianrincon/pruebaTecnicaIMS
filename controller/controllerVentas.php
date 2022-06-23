<?php

include '../conexion/conexion.php';

////Metodo recepcion para agregar productos
if (isset($_POST['venderProducto'])) {

  ///// VARIABLES
  $idProducto = $_POST['idProducto'];
  $cantidadProducto = $_POST['cantidadProducto'];
  $fechaCompra = date('Y-m-d h:i a', time());

  $consultaCantidadInventario = $mysqli->query("SELECT * FROM productos WHERE id = '$idProducto'");
  if (mysqli_num_rows($consultaCantidadInventario) == 0) {
    echo
    '<script language="javascript">alert("No existen registros con los parametros ingresados");
             window.location.href="../view/agregarVentas"</script>';
  } else {
    $extraerDatosCantidad = $consultaCantidadInventario->fetch_array(MYSQLI_ASSOC);
    $cantidad = $extraerDatosCantidad['cantidad'];
  }
  if ($cantidad >= $cantidadProducto) {
    $insertaCompra = $mysqli->query("INSERT INTO ventas(idProducto,cantidad,fechaCompra)VALUES('$idProducto','$cantidadProducto','$fechaCompra')");
    $nuevaCantidad = $cantidad - $cantidadProducto;
    $actualizaInventario = $mysqli->query("UPDATE productos SET cantidad = '$nuevaCantidad',fechaActualizacion='' WHERE id = '$idProducto'  ");
    echo
    '<script language="javascript">alert("Venta realizada exitosamente");
             window.location.href="../view/agregarVentas"</script>';
  } else {
    echo
    '<script language="javascript">alert("La cantidad Ingresada supera la existente en Stock");
             window.location.href="../view/agregarVentas"</script>';
  }
}
