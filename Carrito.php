<?php

class Carrito
{
    public $usuarioCarrito="root";
    public $passwordCarrito="";

    public function __construct(){}

    public function conectarCarrito()
    {
        $datosCarrito="mysql:host=localhost;dbname=tiendamariana";

        $conexionCarrito= new PDO($datosCarrito,$this->usuarioCarrito,$this->passwordCarrito);

        if($conexionCarrito){
            echo("exito");
        }else{
            echo("ERROR");
        }

    }

}



?>