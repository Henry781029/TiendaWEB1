<?php

include ("Carrito.php");

$edicion= new Carrito();

if(isset($_POST["btnCambios"]))
{

    $idEditar=$_GET["id"];

    $nombre=$_POST["productoEditar"];
    $precio=$_POST["precioEditar"];
    $imagen=$_POST["imagenesEditar"];
    $descripcion=$_POST["descripcionEditar"];

    $consultaSQL="UPDATE productos SET Producto='$nombre',Precio='$precio',Descripción='$descripcion',Imagenes='$imagen' WHERE id='$idEditar'";

    $edicion->editarDatos($consultaSQL);

    header("location:Fichas.php");


}


?>