<?php
include(HTML_DIR.'overall/header.php')
 ?>
   <body >
      <!-- Header -->
<?php include(HTML_DIR.'overall/topnav.php'); ?>
      <!-- Main Content -->

<main>
  <section id="banner">
    <img src="views/images/Banners_promociones.jpg" alt="">
    <div class="contenedor">
      <?php if(isset($_GET['success'])){

        echo '<section class="mbr-section mbr-after-navbar" id="content1-10">
            <div class="mbr-section__container container mbr-section__container--isolated">
                <div class="row" style="min-height: 270px;">
                    <div class="alert alert-dismissible alert-info">
                      <strong>Información</strong> Tu cuenta ha sido activada</a>
                    </div>

                </div>
            </div>
        </section>';
      } ?>
      <h2>pregunta por nuestras promociones del mes</h2>
      <p>Para este mes tenemos seguros con el 20% de descuento y bonos de gasolina desde hasta 30mil pesos, aprovecha, no dejes pasar estas ofertas</p>
      <a href="?view=index" target="_self">Leer mas.</a>
  </div>
  </section>

        <section id="productos">
            <div class="contenedor">

  </div>

  </section>

</main>
<?php include(HTML_DIR.'overall/footer.php'); ?>

      <!-- Scripts -->

   </body>
</html>
