<?php

include("Carrito.php");


if(isset($_POST["btnRegistrar"]))
{
    $nombre=$_POST["nombre"];
    $marca=$_POST["marca"];
    $precio=$_POST["precio"];
    $descripcion=$_POST["descripcion"];

    $comprobacion= new Carrito();

    $comprobacion->conectarCarrito();


}







?>