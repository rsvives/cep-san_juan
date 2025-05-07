
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

</head>

<body>
    <main>
        <header>
            <?php include_once("menu.html")?>
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
        <section id="contacto">
            <div class="imagen-contacto">
            <img src="" alt="imagen del centro"><!--Aqui va una imagen posiblemente de el establecimiento -->
            </div>
            <div class="form-contact">
            <form action="contact">
                <label for="name"></label><br>
                <input type="text" id="name" required placeholder="Introduzca su nombre"><br>
                <label for="mail"></label><br>
                <input type="email" id="mail" name="mail" placeholder="Introduzca su correo"><br>
                <label for="subject"></label><br>
                <select name="subject" id="subject">
                    <option value="FP">FP</option>
                    <option value="AgenciaColocacion">AgenciaDeColocacion</option>
                    <option value="option3">option3</option>
                    <option value="option4">option4</option>
                    
                </select>
                <label for="text"></label><br>
                <textarea name="mesage" id="mesage" rows="5"></textarea><br><br>
                <input type="submit" value="ENVIAR">

            </form>
            </div>

        </section>  

    </main>
    <footer>
        <!-- aquí irá el footer -->
    </footer>



</body>

</html>