<?php

include("Carrito.php");


if(isset($_POST["btnRegistrar"]))
{
    $nombre=$_POST["nombre"];
    $marca=$_POST["marca"];
    $precio=$_POST["precio"];
    $descripcion=$_POST["descripcion"];

    $comprobacion= new Carrito();
    
    $consultaSQL="INSERT INTO productos(id,Producto,Marca,Precio,Descripción) VALUES ('$nombre','$marca','$precio','$descripcion')";
    
    $comprobacion->agregarDatos($consultaSQL);

}







?>