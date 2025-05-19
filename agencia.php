<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

  <!-- Tu CSS (opcional) -->
  <link rel="stylesheet" href="style.css" />
</head>

<!-- d-flex + flex-column + min-vh-100 hacen que body ocupe toda la altura -->
<body class="d-flex flex-column min-vh-100">

  <header>
    <?php include("menu.html"); ?>
  </header>

  <!-- Contenido principal ocupa el espacio restante -->
  <main class="flex-grow-1">
    <h2 class="text-center mt-4">AGENCIA DE COLOCACIÓN</h2>

    <section class="container py-5">
      <div class="text-center mb-4">
        <img src="ruta-a-tu-imagen.jpg" alt="Imagen de la agencia" class="img-fluid" />
      </div>

      <div class="p-4">
        <p>
          Bienvenidos a nuestra agencia de colocación. Nuestra finalidad consiste en proporcionar a los demandantes de empleo un puesto de trabajo adecuado a sus características profesionales y facilitar a las empresas los candidatos con el perfil más apropiado a sus requerimientos y necesidades.
        </p>
        <p>
          La Agencia de Colocación es un instrumento gratuito que valora los perfiles, aptitudes, conocimientos y cualificaciones profesionales de los demandantes de empleo para proporcionarles una mejor empleabilidad y acceso al mercado laboral.
        </p>
        <p>
          Asimismo piensa en la mejora de las empresas y su productividad facilitándoles las personas más adecuadas a sus requerimientos y necesidades.
        </p>
        <p>Para ello proporcionamos:</p>
        <ul>
          <li>Orientación</li>
          <li>Formación para el empleo</li>
          <li>Acompañamiento en la búsqueda de empleo</li>
          <li>Intermediación laboral</li>
        </ul>
      </div>

      <div class="text-center mt-4">
        <a href="desempleados.php" class="btn btn-primary mx-2">Desempleados</a>
        <a href="empresas.php" class="btn btn-secondary mx-2">Empresas</a>
      </div>
    </section>
  </main>

  <!-- Footer queda abajo aunque el contenido sea corto -->
  <footer class="bg-dark text-white py-5 mt-auto">
    <?php include("footer.php"); ?>
  </footer>

</body>
</html>
