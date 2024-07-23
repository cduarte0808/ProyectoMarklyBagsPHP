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
        #mensajeOK {
            display: none;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px 0;
        }
    </style>

    <script>
        function mostrarMensaje() {
            var mensaje = document.getElementById('mensajeOK');
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
        <div class="tituloforms">
            <h1 class="negrita-grande">Formulario de Contacto</h1>
        </div>
        <div class=" formulario" style="height:670px;">
        <?php
        // Generar el mensaje
        if (isset($_SESSION['form-contacto'])) {
            echo '<div id="mensajeOK" style="width:450px; text-align:left">'.$_SESSION['form-contacto'].'</div>';
            echo '<script>mostrarMensaje();</script>';
            unset($_SESSION['form-contacto']);
        }
        ?>
            <form class="formContacto" action="crearContacto.php" method="POST">
                <label class="labelf" for="nombre">Nombre Completo:</label><br>
                <input class="input1" type="text" id="nombre" name="nombre" placeholder="Ingrese Nombre completo" required><br><br>

                <label class="labelf" for="correo">Correo Electrónico:</label><br>
                <input class="input1" type="email" id="correo" name="correo" placeholder="Ingrese Correo electrónico" required><br><br>

                <label class="labelf" for="numero-contacto">Número de Contacto:</label><br>
                <input class="input1" type="tel" id="numeroContacto" name="numeroContacto" placeholder="Ingrese Número de contacto" required><br><br>

                <label class="labelf" for="asunto">Asunto:</label><br>
                <input class="input1" type="text" id="asunto" name="asunto" placeholder="Ingrese Asunto" required><br><br>

                <label class="labelf" for="mensaje">Mensaje:</label><br>
                <input class="input1" type="text" id="mensaje" name="mensaje" placeholder="Ingrese Mensaje" required><br><br>
                
                <button class="buttonf" type="submit">Enviar</button>
            </form>
        </div>

        <div class="tituloforms">
            <h1 class="negrita-grande">Visita nuestras tiendas. </h1>
        </div>
        <div>
            <div class="map2">
                <div>
                    <h2 class="negrita-grande">New York</h2>
                </div>
                <div>
                    <h2 class="negrita-grande">Panama</h2>
                </div>
            </div>
            <div class="map2">
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387084.77436820934!2d-74.25986415229187!3d40.697670005650504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1621458397977!5m2!1sen!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4042068.8671730557!2d-82.75390365552462!3d8.368878777548757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa61583c8be2be3%3A0x79eee04d1fa59bcf!2sPanama!5e0!3m2!1sen!2sus!4v1716296772822!5m2!1sen!2sus"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </main>

    <?php    
        include __DIR__."/../views/layouts/footer.php";
    ?>

</body>

</html>