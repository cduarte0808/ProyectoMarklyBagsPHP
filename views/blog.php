<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Markly Collections</title>
    <link rel="shortcut icon" href="./public/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./public/css/reset.css" />
    <link rel="stylesheet" href="./public/css/styles.css " />

</head>

<body>
<?php    
include __DIR__."/../views/layouts/header.php";
?>
    <main class="mainBlogBag">
        <section class="seccionTarjetas">
            <div class="tarjeta">
                <table>
                    <thead>
                        <tr>
                            <th>Quality Craftsmanship</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="textoTarjetas">
                                Meticulously crafted using premium materials, our bags are a testament to enduring
                                quality.ensuring you're always prepared for any journey.
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="./public/assets/images/caja.png" alt="caja">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tarjeta">
                <table>
                    <thead>
                        <tr>
                            <th>Versatility</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="textoTarjetas">
                                From the office to weekend getaways, Markly bags seamlessly blend style with
                                practicality, ensuring you're always prepared for any journey.
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="./public/assets/images/chicaCaja.png" alt="chicaCaja">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tarjeta">
                <table>
                    <thead>
                        <tr>
                            <th>Sustainability</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="textoTarjetas">
                                We're committed to eco-friendly practices, sourcing materials responsibly and crafting
                                bags that stand the test of time.
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="./public/assets/images/chicaCartera.png" alt="chicaCartera">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <?php    
        include __DIR__."/../views/layouts/footer.php";
    ?>
</body>

</html>