<!DOCTYPE html>
<html>
  <head>

    <link type="text/css" rel="stylesheet" href="../estilos/main.css"></link>

    <!--<script type="text/javascript" src="../scripts/jquery-2.2.3.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script async type="text/javascript" src="../scripts/nav.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-79369967-1', 'auto');
      ga('send', 'pageview');

    </script>

    <title>Patrocinadores | Juan I. Rodriguez</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Estas son las empresas que me apoyan. Tú también puedes unirte a mi carrera deportiva." />
		<meta name="keywords" content="patrocinio, patrocinador, colaboracion, juegos, olimpicos, imagen, publicidad, apoyo" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>


    <!-- Elementos SEO-->
    <link rel="canonical" href="http://archery.juanrodriguezcodes.com/patrocinadores" />
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
        $nav='patrocinadores';
        include_once('../nav.php');
      ?>
    </nav>
    <div class="main-container">
      <header class="rojo">
        <div class="tools-group">
          <span class="header-nav-toggle fa fa-bars"></span>
        </div>
        <div class="header-logo"><span class="logo-img"></span><b>Juan I. Rodríguez</b> | Web oficial</div>
      </header>
      <section class="patrocinadores">
        <div class="section-header">
          <div class="section-header-titles">
            <h1>Patrocinadores</h1>
            <h5>Material, preparación, competiciones...<br/>
              El deporte de alto nivel necesita apoyo para obtener resultados.<br/>Estos son los míos</h5>
          </div>
        </div>
        <div class="section-container">
          <div class="patrocinadores-listado">
            <div class="item ">
              <a href="http://www.win-archery.com"><img src="../recursos/imagenes/secciones/patrocinadores-winwin.png" alt="WinandWin es mi principal sponsor"/></a>
              Win&Win es mi principal sponsor. Gracias a ellos puedo usar cada año un arco en perfecto estado.
            </div>
            <div class="item ">
              <a href="http://www.wernerbeiter.com"><img src="../recursos/imagenes/secciones/patrocinadores-beiter.png" alt="Beiter me proporciona nocks"/></a>
              Beiter me ayuda a ponerle nocks a mis flechas.
            </div>
            <div class="item ">
              <a href="http://www.xswings.com"><img src="../recursos/imagenes/secciones/patrocinadores-xswings.png" alt="XS Wings me ayuda a ponerle plumas a mis flechas"/></a>
              XS Wings me ayuda a mejorar mi agrupación con sus plumas.
            </div>
            <div class="item ">
              <a href="http://www.visioramasport.es/"><img src="../recursos/imagenes/secciones/patrocinadores-visiorama.png" alt="Visiorama sport optica deportiva"/></a>
              Visiorama cuida mi vista para mantener la precisión en cualquier situación.
            </div>
          </div>
          <div class="patrocinadores-action">
            <h2>¿Quiéres apoyar mi carrera deportiva?</h2>
            <div class="patrocinadores-action-container">
              <div class="item">
                <img src="../recursos/imagenes/secciones/patrocinadores-patrocinalos.png" alt="España compite es un proyecto de mezenazgo prioritario"/>
                A través de Marca Patrocínalos cualquier persona puede hacer una aportación, sin importar la cantidad y
                llevarse recompensas como fotos firmadas, camisetas o incluso una masterclass privada conmigo.
                <a href="http://www.patrocinalos.com/proyecto/deportista/1106-juan-ignacio-rodr%C3%ADguez" target="_blank" class="boton blanco">Hacer aportación</a>
              </div>
              <div class="item">
                <img class="smaller" src="../recursos/imagenes/secciones/patrocinadores-espana-compite.png" alt="España compite es un proyecto de mezenazgo prioritario"/>
                Con el proyecto España Compite, las PYMES se pueden beneficiar de hasta un 40% de desgravación fiscal si
                apoyan a un deportista.
                <a href="http://www.csd.gob.es/csd/estaticos/noticias/Documentacion_Espana_Compite.pdf" target="_blank" class="boton blanco">Ver documentación</a>
              </div>
              <div class="item">
                <div class="fa fa-envelope-square"></div>
                Si lo prefieres, puedes contactar conmigo directamente y hablamos del proyecto que podríamos realizar.
                <a href="mailto:juan@juanignaciorodriguez.com" class="boton blanco">Enviar email</a>
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
