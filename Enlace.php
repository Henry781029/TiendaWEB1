<?php

include("Carrito.php");


if(isset($_POST["btnRegistrar"]))
{
    $nombre=$_POST["producto"];
    $marca=$_POST["marca"];
    $precio=$_POST["precio"];
    $descripcion=$_POST["descripcion"];
    $imagen=$_POST["imagenes"];

    $comprobacion= new Carrito();

    $consultaSQL="INSERT INTO productos(Producto,Marca,Precio,Descripción,Imagenes) VALUES ('$nombre','$marca','$precio','$descripcion','$imagen')";
    
    $comprobacion->agregarDatos($consultaSQL);

    header("location:index.php");

}

?>