<?php

echo ($_GET["id"]);

include ("Carrito.php");

$idEliminar=($_GET["id"]);

$Eliminar= new Carrito();

$consultaSQL="DELETE FROM productos WHERE id='$idEliminar'";

$Eliminar->eliminarDatos($consultaSQL);

header("location:Fichas.php");

?>