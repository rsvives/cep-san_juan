<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <?php 
        include("menu.html");?>
    </header>
  <main class="flex-grow-1">
    <div class="container my-5">
        <h2>FP</h2>
        <br>
        <h3>Ciclo Formativo de Grado Superior</h3>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              Guía, Información y Asistencia Turística
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Secuenciación y distribución horaria semanal de los módulos profesionales (2.000 h):</strong>

              <!-- Tabla 1 -->
              <div class="table-responsive mb-4">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Módulo Profesional</th>
                      <th>Duración (horas)</th>
                      <th>Primer Curso (h/semana)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>0171. Estructura del mercado turístico (1) (2)</td>
                      <td>100</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>0172. Protocolo y relaciones públicas (2)</td>
                      <td>110</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>0173. Marketing turístico (2)</td>
                      <td>150</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>0383. Destinos turísticos(1)(2)</td>
                      <td>180</td>
                      <td>6</td>
                    </tr>
                    <tr>
                      <td>0384. Recursos turísticos (2)</td>
                      <td>110</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>0179. Inglés (2)</td>
                      <td>130</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>0389. Formación y Orientación Laboral</td>
                      <td>90</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>Horario reservado para el módulo impartido en inglés</td>
                      <td>90</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td><strong>Total</strong></td>
                      <td><strong>960</strong></td>
                      <td><strong>30</strong></td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <!-- Tabla 2 -->
              <h5>Segundo Curso</h5>
              <div class="table-responsive mb-4">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Módulo Profesional</th>
                      <th>Duración (horas)</th>
                      <th>2 trimestres (h/semana)</th>
                      <th>1 trimestre (horas)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>0385. Servicios de información turística</td>
                      <td>90</td>
                      <td>5</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>0386. Procesos de asistencia y guía</td>
                      <td>140</td>
                      <td>7</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>0387. Diseño de productos turísticos</td>
                      <td>140</td>
                      <td>7</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>0180. Segunda lengua extranjera. (2)</td>
                      <td>130</td>
                      <td>6</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>0390. Empresa e iniciativa emprendedora</td>
                      <td>60</td>
                      <td>3</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Horario reservado para el módulo impartido en inglés.</td>
                      <td>40</td>
                      <td>2</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>0391 Formación en Centros de Trabajo</td>
                      <td>400</td>
                      <td></td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <td>0388. Proyecto de guía, información y asistencia turísticas</td>
                      <td>40</td>
                      <td></td>
                      <td>40</td>
                    </tr>
                    <tr>
                      <td><strong>Total</strong></td>
                      <td><strong>1040</strong></td>
                      <td><strong>30</strong></td>
                      <td><strong>440</strong></td>
                    </tr>
                  </tbody>
                </table>
                <section>
                  <p><strong>Módulos susceptibles de ser impartidos en lengua inglesa</strong></p>
                  <p>0385 Servicios de información turística. … 90</p>
                  <p>0386 Procesos de asistencia y guía. ……. 140</p>
                  <p>0387 Diseño de productos turísticos. …... 140</p>

                  <p>Si desea información completa pulse aquí:<br />
                    <a href="http://www.boe.es/boe/dias/2009/09/05/pdfs/BOE-A-2009-14261.pdf" target="_blank" rel="noopener noreferrer">
                      http://www.boe.es/boe/dias/2009/09/05/pdfs/BOE-A-2009-14261.pdf
                    </a>
                  </p>

                  <p>Si desea información resumida pulse aquí:<br />
                    <a href="http://www.todofp.es/todofp/que-como-y-donde-estudiar/que-estudiar/familias/hosteleria-turismo/asistencias-turisticas.html"
                      target="_blank" rel="noopener noreferrer">
                      http://www.todofp.es/todofp/que-como-y-donde-estudiar/que-estudiar/familias/hosteleria-turismo/asistencias-turisticas.html
                    </a>
                  </p>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
              aria-expanded="false" aria-controls="collapseTwo">
              Técnico Superior en Comercio Internacional (LOE)
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p><strong>Secuenciación y distribución horaria semanal de los módulos profesionales</strong></p>

              <p><strong>PRIMER CURSO</strong></p>
              <div class="table-responsive mb-4">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>MÓDULOS</th>
                      <th>HORAS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <<tr>
                      <td>Transporte internacional de mercancías</td>
                      <td>160</td>
                    </tr>
                    <tr>
                      <td>Gestión económica y financiera de la empresa</td>
                      <td>192</td>
                    </tr>
                    <tr>
                      <td>Logística de almacenamiento</td>
                      <td>128</td>
                    </tr>
                    <tr>
                      <td>Gestión administrativa del comercio internacional</td>
                      <td>192</td>
                    </tr>
                    <tr>
                      <td>Lengua inglesa</td>
                      <td>96</td>
                    </tr>
                    <tr>
                      <td>Formación y orientación laboral</td>
                      <td>96</td>
                    </tr>
                    <tr>
                      <td>Módulo impartido en inglés</td>
                      <td>96</td>
                    </tr>
                    <tr>
                      <th>TOTAL</th>
                      <th>960</th>
                    </tr>
                  </tbody>
                </table>
              </div>

              <p><strong>SEGUNDO CURSO</strong></p>
              <div class="table-responsive mb-4">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>MÓDULOS</th>
                      <th>HORAS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Sistema de información de mercados</td>
                      <td>80</td>
                    </tr>
                    <tr>
                      <td>Marketing internacional</td>
                      <td>140</td>
                    </tr>
                    <tr>
                      <td>Negociación internacional</td>
                      <td>80</td>
                    </tr>
                    <tr>
                      <td>Financiación internacional</td>
                      <td>120</td>
                    </tr>
                    <tr>
                      <td>Medios de pago internacionales</td>
                      <td>80</td>
                    </tr>
                    <tr>
                      <td>Comercio digital internacional</td>
                      <td>60</td>
                    </tr>
                    <tr>
                      <td>Módulo impartido en inglés</td>
                      <td>40</td>
                    </tr>
                    <tr>
                      <td>Proyecto de comercio internacional</td>
                      <td>40</td>
                    </tr>
                    <tr>
                      <td>Formación en centros de trabajo</td>
                      <td>400</td>
                    </tr>
                    <tr>
                      <th>TOTAL</th>
                      <th>1040</th>
                    </tr>
                  </tbody>
                </table>
              </div>

              <p><strong>Módulos susceptibles de ser impartidos en lengua inglesa</strong></p>
              <ul>
                <li>0622. Transporte internacional de mercancías.</li>
                <li>0623. Gestión económica y financiera de la empresa.</li>
                <li>0627. Gestión administrativa del comercio internacional.</li>
                <li>0823. Marketing internacional.</li>
                <li>0825. Financiación internacional.</li>
                <li>0826. Medios de pago internacionales.</li>
              </ul>

              <p><strong>Técnico Superior en Comercio Internacional (LOE)</strong></p>

              <p>Si desea información completa pulse aquí:<br />
                <a href="http://www.boe.es/boe/dias/2011/12/13/pdfs/BOE-A-2011-19439.pdf" target="_blank" rel="noopener noreferrer">http://www.boe.es/boe/dias/2011/12/13/pdfs/BOE-A-2011-19439.pdf</a>
              </p>

              <p>Si desea información resumida pulse aquí:<br />
                <a href="http://todofp.es/todofp/que-como-y-donde-estudiar/que-estudiar/familias/comercio-marketing/comercio-internacional-loe.html"
                  target="_blank" rel="noopener noreferrer">http://todofp.es/todofp/que-como-y-donde-estudiar/que-estudiar/familias/comercio-marketing/comercio-internacional-loe.html</a>
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="bg-dark text-white py-5 mt-auto">
    <?php include("footer.php"); ?>
  </footer>
</body>

</html>
