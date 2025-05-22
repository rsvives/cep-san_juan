<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEP San Juan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="form.js"></script>

</head>

<body>
    <main>
        <header>
            <?php include_once("menu.html");

            ?>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

            <!-- aquí irá el menú de navegación: navbar -->
        </header>

        <!-- <section id="responsive-test" class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <h2>Columna 1</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum veritatis voluptates illum.</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <h2>Columna 2</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum veritatis voluptates illum.</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <h2>Columna 3</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum veritatis voluptates illum.</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <h2>Columna 3</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum veritatis voluptates illum.</p>
                </div>
            </div>
        </section> -->

        <section id="slider" class="slide">
            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3500">
                 <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/photo-slider_1.avif" class="d-block w-100 carousel-img" alt="foto1">
                    </div>
                    <div class="carousel-item">
                        <img src="img/photo-slider_2.avif" class="d-block w-100 carousel-img" alt="foto2">
                    </div>
                    <div class="carousel-item">
                        <img src="img/photo-slider_3.avif" class="d-block w-100 carousel-img" alt="foto3">
                    </div>
                </div>
                              
            </div>
        </section>
        
            <section id="quienes-somos" style="background-color: #333;" class="justify gold">
                <h1>QUIENES SOMOS</h1>
                <h2>Una empresa con experiencia y pasión por la enseñanza</h2>
                <p>En el Centro de Estudios Profesionales San Juan asumimos como una de
                    las premisas fundamentales la prestación de un servicio formativo actualizado y de calidad.</p>
                <p>Asimismo mantenemos la responsabilidad de desarrollar un trabajo
                    honesto y profesional, basado en la experiencia y el compromiso constante con nuestros clientes. </p>
                <h4>Instalaciones de vanguardias</h4>
                <p>Nuestras instalaciones están dotadas de cómodas aulas, tecnología
                    acorde a las exigencias y somos el primer centro privado de enseñanza en Asturias cuyas instalaciones
                    han obtenido el certificado de accesibilidad universal.</p>
                <h4>Accesibilidad para todos</h4>
                <p>Disponemos de rampa de acceso, creemos que las barreras sólo existen si
                    nosotros las creamos. Por ello, somos un centro donde los límites físicos no existen.</p>
                <p>Así todos tienen las mismas oportunidades de crecer intelectualmente. Su satisfacción es la mejor muestra de nuestra calidad.</p>
                <div class="text-end">
                    <a class="btn btn-primary buttom" href="http://localhost/CEP-SAN_JUAN/conocenos.php" target="_blank"
                        role="button">Saber más</a>
                </div>
            </section>

            <section id="contacto" class="container-fluid">
                <div class="p-5">
                    <div class="row">
                        <!-- Columna para imagen: ocupa todo el ancho en pantallas pequeñas, 6 columnas en pantallas grandes -->
                        <div class="col-12 col-md-6">
                            <img src="" alt="imagen del centro" class="img-fluid">
                        </div>

                        <!-- Columna para formulario: ocupa todo el ancho en pantallas pequeñas, 6 columnas en pantallas grandes -->
                        <div class="col-12 col-md-6">
                            <form action="send.mail.php" method="post" class="mb-3">
                                <label for="name" class="form-label">Nombre:</label>
                                <input type="text" id="name" name="name" required placeholder="Pon tu nombre completo" class="form-control">

                                <label for="mail" class="form-label">Email:</label>
                                <input type="email" id="mail" name="mail" required placeholder="ejemplo@gmail.com" class="form-control">

                                <label for="subject" class="form-label">Asunto:</label>
                                <select name="subject" id="subject" required onchange="mostrarCampo(this)" class="form-control">
                                    <option selected>Elige una opción</option>
                                    <option value="FP">FP</option>
                                    <option value="AgenciaColocacion">Agencia De Colocación</option>
                                    <option value="option3">Option 3</option>
                                    <option value="other">Otro</option>
                                </select>

                                <!-- Campo visible solo si elige "otro" -->
                                <div id="camp-other" style="display: none; margin-top: 10px;">
                                    <label for="other-text" class="form-label">Otro:</label>
                                    <input type="text" id="other-text" name="other-text" placeholder="Especifique su tema" class="form-control">
                                </div>

                                <label for="mesage" class="form-label">Mensaje:</label>
                                <textarea name="mesage" id="mesage" rows="5" required placeholder="Escriba su mensaje" class="form-control"></textarea>

                                <br>
                                <input type="submit" value="ENVIAR" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </section>



    </main>
    <footer class="bg-dark text-white py-5">
        <?php 
        include("footer.php");
        ?>

    </footer>




</body>

</html>