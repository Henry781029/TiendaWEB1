<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de MARIANA</title>
    <link rel="icon" type="img/png" href="img\niñadulce.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <header>
      <div>
        <img src="img/niñadulce.png" width="50" height="50" alt="imagen1">
        <h1>Tienda de dulces de MARIANA</h1>

      </div>
    
    </header>

    <main>
      
<div class="row">
  <div class="col-6">      
    <form class="mt-5" action="Enlace.php" method="POST">
      <div class="form-group row">
        <label for="" class="col-2 col-form-label">NOMBRE</label>
        <input type="text" placeholder="Nombre Producto" class="form-control col-10" name="producto">
      </div>
      <div class="form-group row">
        <label for=""class="col-2 col-form-label">MARCA</label>
        <input type="text" placeholder="Marca Producto" class="form-control col-10" name="marca">
      </div>
      <div class="form-group row">
        <label for="" class="col-2 col-form-label">PRECIO</label>
        <input type="text" placeholder="Ingrese Precio" class="form-control col-10" name="precio">
      </div>
      <div class="form-group row">
        <label for="" class="col-2 col-form-label">DESCRIPCION</label>
        <textarea class="form-control col-10" placeholder="Descripcion del Producto" rows="10" name="descripcion"></textarea>
      </div>
      <div class="form-group row">
        <label for="" class="col-2 col-form-label">IMAGENES</label>
        <input type="text" placeholder="URL IMAGEN" class="form-control col-10" name="imagenes">
      </div>
      <div class="form-group row">
        <button class="btn btn-danger mt-5 col-12" name="btnRegistrar">Registrar</button>  
      </div>
      
    </form>
    <div class="form-group row">
        <a href="Fichas.php" class="btn btn-danger mt-4 col-12" >Bodega</a> 
      </div>
  </div>
</div>

    
    </main>

    <footer>
    
    
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>