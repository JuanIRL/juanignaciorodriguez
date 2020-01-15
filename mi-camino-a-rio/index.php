<!DOCTYPE html>
<html>
  <head>

    <link type="text/css" rel="stylesheet" href="../estilos/main.css"/>


    <!--<script type="text/javascript" src="../scripts/jquery-2.2.3.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script async type="text/javascript" src="../scripts/nav.js"></script>
    <script type="text/javascript" src="../scripts/recuperador-posts.js"></script>
    <script async type="text/javascript" src="../scripts/twitter.js"></script>
    <script async type="text/javascript" src="../scripts/facebook.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-79369967-1', 'auto');
      ga('send', 'pageview');

    </script>


    <title>Mi camino a Rio | Juan I. Rodriguez</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Pásate por aqui con frecuencia para estar al día de mi preparación. Competiciones, entrenamientos, eventos y más." />
		<meta name="keywords" content="olimpiada, rio, entrenamiento, sesion, dia, juegos, arco, gimnasio, campo" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Marcado facebook-->
    <meta property="og:url" content="http://archery.juanrodriguezcodes.com/patrocinadores" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Mi camino a Rio | Juan I. Rodriguez" />
    <meta property="og:description" content="Pásate por aqui con frecuencia para estar al día de mi preparación. Competiciones, entrenamientos, eventos y más." />
    <meta property="og:image" content="recursos/imagenes/secciones/home-patrocinadores-movil.jpg" />

    <!-- Marcado twitter-->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@JuanIRL">
    <meta name="twitter:creator" content="@JuanIRL">
    <meta name="twitter:title" content="Mi camino a Rio | Juan I. Rodriguez">
    <meta name="twitter:description" content="Pásate por aqui con frecuencia para estar al día de mi preparación. Competiciones, entrenamientos, eventos y más.">
    <meta name="twitter:image" content="recursos/imagenes/secciones/home-patrocinadores-movil.jpg">

    <!-- Elementos SEO-->
    <link rel="canonical" href="http://archery.juanrodriguezcodes.com/mi-camino-a-rio" />
    <meta name="robots" content="NOODP">

    <!--Set de iconos para todas las plataformas-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">


  </head>
  <body>
    <nav class="escondido">
      <?php
        $nav='camino';
        include_once('../nav.php');
      ?>
    </nav>
    <div class="main-container">
      <header class="">
        <div class="tools-group">
          <span class="header-nav-toggle fa fa-bars"></span>
        </div>
        <div class="header-logo"><span class="logo-img"></span><b>Juan I. Rodríguez</b> | Web oficial</div>
      </header>
      <section class="miCamino">
        <div class="section-header">
          <div class="section-header-titles">
            <h1>Mi camino a Rio</h1>
            <h5>Sigue mis entrenamientos y competiciones día a día en preparación para los Juegos Olímpicos de Rio 2016.
            </h5>
          </div>
        </div>
        <div class="section-container">
          <div class="social-cta">
            <a href="https://twitter.com/intent/follow?original_referer=https%3A%2F%2Fjuanignaciorodriguez.com%2Fmi-camino-a-rio&ref_src=twsrc%5Etfw&region=follow_link&screen_name=JuanIRL&tw_p=followbutton" target="_blank" class="twitter">
              <i class="fa fa-twitter"></i>
              Sígueme en twitter
            </a>
            <a href="https://www.facebook.com/juanrodriguezarco" taget="_blank" class="facebook">
              <i class="fa fa-facebook"></i>
              Sígueme en facebook
            </a>
          </div>
          <div class="social-widgets">
            <div class="widget-twitter">
              <!--<a class="twitter-grid" data-limit="3" data-chrome="nofooter" href="https://twitter.com/JuanIRL/timelines/722026620618321920">Favoritos web</a>-->
              <a class="twitter-timeline" href="https://twitter.com/JuanIRL" height="300" data-chrome="nofooter" data-widget-id="729834957808537600">Tweets por @JuanIRL.</a>
            </div>
            <div class="widget-facebook">
              <div class="fb-page" data-href="https://www.facebook.com/JuanRodriguezArco/" data-tabs="timeline" data-width="335" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                <div class="fb-xfbml-parse-ignore">
                  <blockquote cite="https://www.facebook.com/JuanRodriguezArco/"><a href="https://www.facebook.com/JuanRodriguezArco/">Juan I. RODRIGUEZ</a></blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer>
        <?php
          include_once('../footer.php');
        ?>
      </footer>
    </div>
  </body>


</html>
