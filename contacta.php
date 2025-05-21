<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <header>
            <?php include_once("menu.html");
            $telefono1 = "985 216 462";
            $telefono2 = "+34608741441";
            ?>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

            <!-- aquí irá el menú de navegación: navbar -->
        </header>
        <section class="container" id="contacta">
            <h4>CONTACTA</h4>
        </section>
        <section class="container relleno">
            <div class="row container-fluid">
                <div class="col-12 col-md-6 ubi">
                    <iframe class="w-100"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5801.741415438002!2d-5.840796!3d43.358815!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd368ce9551bd945%3A0x7f6be4d90cf9911f!2sC.%20San%20Pedro%20de%20Mestall%C3%B3n%2C%2011%2C%2033009%20Oviedo%2C%20Asturias%2C%20Espa%C3%B1a!5e0!3m2!1ses!2sus!4v1747390013557!5m2!1ses!2sus"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-12 col-md-6 form">
                    <form action="send.mail.php" method="post" class="mb-3">
                        <label for="name" class="form-label">Nombre (requerido):</label>
                        <input type="text" id="name" name="name" required placeholder="Pon tu nombre completo" class="form-control">
                        
                        <label for="mail" class="form-label">Email (requerido):</label>
                        <input type="email" id="mail" name="mail" required placeholder="ejemplo@gmail.com" class="form-control">
        
                        <label for="subject" class="form-label">Asunto:</label>
                        <select name="subject" id="subject" required onchange="mostrarCampo(this)" class="form-control">
                            <option selected>Elige una opción</option>
                            <option value="FP">FP</option>
                            <option value="AgenciaColocacion">Agencia De Colocación</option>
                            <option value="option3">Option 3</option>
                            <option value="other">Otro</option>
                        </select>
        
                        <div id="camp-other" style="display: none; margin-top: 10px;">
                            <label for="other-text" class="form-label">Otro:</label>
                            <input type="text" id="other-text" name="other-text" placeholder="Especifique su tema"
                                class="form-control">
                        </div>
        
                        <label for="mesage" class="form-label">Mensaje:</label>
                        <textarea name="mesage" id="mesage" rows="5" required placeholder="Escriba su mensaje"
                            class="form-control"></textarea>
        
                        <br>
                        <input type="submit" value="ENVIAR" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-4 mb-3">
                    <a href="https://www.google.com/maps?..." class="text-white text-decoration-none d-block">
                        C/ San Pedro Mestallón, 11 - Bajo
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="tel:<?php echo $telefono1 ?>" class="text-white text-decoration-none d-block">985 216 462</a>
                    <a href="tel:<?php echo $telefono2 ?>" class="text-white text-decoration-none d-block">+34 608 741 441</a>
                </div>
                <div class="d-flex justify-content-center gap-3">
                    <a href="http://www.facebook.com/pages/Centro-de-Estudios-Profesionales-San-Juan/319639151451384" class="text-white"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="https://twitter.com/CEPSANJUAN" class="text-white"><i class="fab fa-x-twitter fa-lg"></i></a>
                </div>

            </div>
        </div>
    </footer>
</body>
</html>