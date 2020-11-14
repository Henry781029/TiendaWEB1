<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bodega</title>
    <link rel="icon" type="img/png" href="img\niñadulce.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<?php 

include ("Carrito.php");

$verificacion= new Carrito();

$consultaSQL="SELECT * FROM productos WHERE 1";

$usuarios=$verificacion->consultarDatos($consultaSQL);


?>


<header>

<h2 class= "text-center">PRODUCTOS EN BODEGA</h2>

</header>

<main>

<div class="container mt-5">
    <div class="row">

        <?php foreach($usuarios as $usuario): ?>
        <div class="col-3">
            <div class="card">
                <img class="card-img-top" src="<?php echo($usuario["Imagenes"])  ?>" alt="imagenes">
                <div class="card-body">
                    <h3 class="card-title"><?php echo($usuario["Producto"]) ?></h3>
                    <h4 class="card-title"><?php echo($usuario["Marca"])  ?></h4>
                    <h4 class="card-title"><?php echo("$".$usuario["Precio"])  ?></h4>
                    <p class="card-text"><?php echo($usuario["Descripción"])  ?></p>
                    <a href="" class="btn btn-warning">EDITAR</a>
                    <a href="eliminarDatos.php?id= <?php echo($usuario['id']) ?> " class="btn btn-danger">ELIMINAR</a>
                </div>
            </div>
        </div>
        <?php endforeach ?>

    </div>
</div>

</main>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>