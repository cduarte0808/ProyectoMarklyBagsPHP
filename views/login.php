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
          <h3>LOGIN</h3>
      </div> 
    <div>
        <form id="login" action="loginAuth.php" method="POST">
            <div>
              <input type="text" class="input1" name="email" placeholder="INGRESA TU EMAIL">
            </div>
            <div>
              <input type="text" class="input1" name="password" placeholder="INGRESA TU CONTRASEÑA*">
            </div>
            <div id="containermsj">
              <p id="msj">&nbsp;</p>
            </div>
            <div>
              <button type="submit">INICIAR SESION →</button>
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