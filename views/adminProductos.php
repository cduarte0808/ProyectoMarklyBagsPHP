<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./public/assets/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./public/css/reset.css" />
  <link rel="stylesheet" href="./public/css/styles.css " />
  <title>Markly</title>
</head>

<body>
<?php    
include __DIR__."/../views/layouts/header.php";
?>
<main>
  <section id="formulario" style="margin-left:200px">
    <div class="tituloforms" style="width: 55vh;">
          <h3>Bienvenido a la Página de Administración de los productos de este Tienda Virtual</h3>
          <a href="bags.php"> <img src="./public/assets/images/Frame.png"
          alt="Ir al listado de Carteras" name="encabezado" id="encabezado">
          </a>
          <a href="accesories.php"> <img src="./public/assets/images/Frame.png"
          alt="Ir al listado de Accesorios" name="encabezado" id="encabezado">
          </a>
    </div>   
    <div>
        <form id="login" action="crearProductos.php" method="POST">
            <div>
              <input type="text" class="input1" id="nombre" placeholder="INGRESA NOMBRE DE PRODUCTO">
            </div>
            <div>
              <input type="text" class="input1" id="descripcion" placeholder="INGRESA DESCRIPCION DEL PRODUCTO">
            </div>
            <div id="containermsj">
              <p id="msj">&nbsp;</p>
            </div>
            <div>
              <button type="submit">Enviar →</button>
            </div>
        </form>
    </div>  
  </section>
</main>

<?php  
include __DIR__."/../views/layouts/footer.php";
?>
</body>

</html>
