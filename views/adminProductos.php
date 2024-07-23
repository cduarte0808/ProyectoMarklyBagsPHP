<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./public/assets/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./public/css/reset.css" />
  <link rel="stylesheet" href="./public/css/styles.css " />
  <title>Markly</title>

  <style>
        #mensajeOK2 {
            display: none;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px 0;
        }
    </style>

    <script>
        function mostrarMensaje2() {
            var mensaje = document.getElementById('mensajeOK2');
            mensaje.style.display = 'block';
            setTimeout(function() {
                mensaje.style.display = 'none';
            }, 4000); // El mensaje desaparecerá después de 5 segundos
        }
    </script>
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
    <?php
        // Generar el mensaje
        if (isset($_SESSION['form-registro'])) {
            echo '<div id="mensajeOK2" style="width:450px; text-align:left">'.$_SESSION['form-registro'].'</div>';
            echo '<script>mostrarMensaje2();</script>';
            unset($_SESSION['form-registro']);
        }
        ?>
        <form id="productos" action="crearProductos.php" method="POST">
            <div>
              <input type="text" class="input1" name="nombre" placeholder="INGRESA NOMBRE DE PRODUCTO">
            </div>
            <div>
              <input type="text" class="input1" name="descripcion" placeholder="INGRESA DESCRIPCION DEL PRODUCTO">
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
