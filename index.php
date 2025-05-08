
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

        <section id="contacto">
    <div class="imagen-contacto">
        <img src="" alt="imagen del centro">
    </div>
    <div class="form-contact">
        <form action="send.mail.php" method="post">
            <label for="name"></label><br>
            <input type="text" id="name" name="name" required placeholder="Introduzca su nombre"><br>

            <label for="mail"></label><br>
            <input type="email" id="mail" name="mail" required placeholder="Introduzca su correo"><br>

            <label for="subject"></label><br>
            <select name="subject" id="subject" required onchange="mostrarCampo(this)">
                <option value="FP">FP</option>
                <option value="AgenciaColocacion">Agencia De Colocación</option>
                <option value="option3">Option 3</option>
                <option value="other">Otro</option>
            </select><br>

            <!-- Campo visible solo si elige "otro" -->
            <div id="camp-other" style="display: none; margin-top: 10px;">
                <label for="other-text"></label><br>
                <input type="text" id="other-text" name="other-text" placeholder="Especifique su tema">
            </div>

            <label for="mesage"></label><br>
            <textarea name="mesage" id="mesage" rows="5"  required placeholder="Escriba su mensaje"></textarea><br><br>

            <input type="submit" value="ENVIAR">
        </form>
    </div>

    <script>
        function mostrarCampo(select) {
            const camp = document.getElementById('camp-other');
            const otherInput =document.getElementById('other-text');
            if (select.value === 'other') {
                camp.style.display = 'block';
                otherInput.setAttribute('required','required');
            } else {
                camp.style.display = 'none';
                otherInput.removeAttribute('required');
                document.getElementById('other-text').value = '';
            }
        }
    </script>
</section>


    </main>
    <footer>
        <!-- aquí irá el footer -->
    </footer>



</body>

</html>