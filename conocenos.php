<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conócenos</title>
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
        <section class="container" id="conocenos">
            <h4>CONÓCENOS</h4>
            <p>En esta página encontrarás mas información acerca de nuestra trayectoria, equipo e instalaciones</p>
            <img src="https://cepsanjuan.com/wp-content/uploads/2016/06/Logo_2014c.png" alt="logo-cep_sanjuan">
        </section>
        <section id="accordion">
            <div class="container d-flex justify-content-center">
                <div class="accordion accordion-flush w-100" id="accordionFlushExample" style="max width: 800px;">
                    <div class="accordion-item border">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed justify-content-center" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                <strong>Nuestra trayectoria</strong>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">El Centro de Estudios Profesionales San Juan (CEP San Juan) posee
                                una
                                trayectoria de veinte años de experiencia en el campo de la formación profesional,
                                impartiendo
                                diferentes especialidades homologadas.</div>
                        </div>
                    </div>
                    <div class="accordion-item border">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <strong>Colaboradores</strong>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Trabajamos en colaboración con el Servicio Público de Empleo del
                                Principado de Asturias, para cumplir con nuestra política de calidad en la que lo más
                                importante
                                es la integridad, la responsabilidad y el compromiso con nuestros clientes.</div>
                            <div class="accordion-body accordion-text"> Para ello contamos con los mejores recursos humanos
                                y
                                materiales, con el fin de cumplir con nuestro único objetivo: su satisfacción.</div>
                        </div>
                    </div>
                    <div class="accordion-item border">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                <strong>Nuestras instalaciones</strong>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">(texto de ejemplo)Contamos con x aulas para todo tipo de enseñanza.
                                En
                                cada aula hay pizarras con proyector para poder impartir las clases de la mejor manera
                                posible,
                                tambien disponemos de portatiles para los alumnos.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <img src="https://cepsanjuan.com/wp-content/uploads/2016/06/aula1.jpg" alt="foto-aula">
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