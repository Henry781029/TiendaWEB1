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
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php  echo($usuario["id"])?>">EDITAR</button>
                    <a href="eliminarDatos.php?id= <?php echo($usuario['id']) ?> " class="btn btn-danger">ELIMINAR</a>
                </div>
            </div>

            <div class="modal fade" id="editar<?php  echo($usuario["id"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EDITAR DATOS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="editarDatos.php?id=<?php echo ($usuario["id"]) ?>" method="POST">
                            <div class="modal-body">
                                <input type="text" placeholder="Renombrar Producto" class="form-control col-10" name="productoEditar" value="<?php echo($usuario["producto"])?>">
                                <input type="text" placeholder="Nuevo Precio" class="form-control col-10" name="precioEditar" value="<?php  echo($usuario["precio"])?>">
                                <input type="text" placeholder="Nueva URL IMAGEN" class="form-control col-10" name="imagenesEditar" value="<?php  echo($usuario["imagenes"])?>">
                                <textarea class="form-control col-10" placeholder="Nueva descripcion" rows="10" name="descripcionEditar"><?php  echo($usuario['descripcion'])?></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" name="atras">Atras</button>
                                <button type="submit" class="btn btn-warning" name="btnCambios">Efectuar Cambios</button>
                            </div>
                        </form>
                    </div>
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