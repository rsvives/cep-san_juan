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
            $telefono1 = "985 216 462";
            $telefono2 = "+34608741441";
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

        <section id="slider">

        </section>
        <section id="quienes-somos">
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