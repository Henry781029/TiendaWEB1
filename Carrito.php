<?php

class Carrito
{
    public $usuarioCarrito="root";
    public $passwordCarrito="";

    public function __construct(){}

    public function conectarCarrito()
    {

        try
        {

            $datosCarrito="mysql:host=localhost;dbname=tiendamariana";
            $conexionCarrito= new PDO($datosCarrito,$this->usuarioCarrito,$this->passwordCarrito);
            return($conexionCarrito);

        }
        catch(PDOException $error)
        {
            echo($error->getMessage());
        }

    }

    public function agregarDatos($consultaSQL)
    {

        $conexionCarrito=$this->conectarCarrito();

        $insertarDatos=$conexionCarrito->prepare($consultaSQL);

        $resultados=$insertarDatos->execute();

        if($resultados){
            echo("PRODUCTO AGREGADO");
        }else{
            echo("ERROR");
        }

    }

}



?>