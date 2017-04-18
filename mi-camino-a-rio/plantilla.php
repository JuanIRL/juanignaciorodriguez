<!DOCTYPE html>
<html>
  <head>

    <link type="text/css" rel="stylesheet" href="../../estilos/main.css"></link>

    <!--<script type="text/javascript" src="../../scripts/jquery-2.2.3.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script async type="text/javascript" src="../../scripts/nav.js"></script>
    <script async type="text/javascript" src="../../scripts/twitter.js"></script>
    <script async type="text/javascript" src="../../scripts/facebook.js"></script>

    <title>
      <?php
        echo $titulo." | Juan I. Rodriguez";
      ?>
    </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description"
      <?php
        echo "content='".$desc_pagina."'"
      ?>
      />
      <meta name="keywords"
        <?php
          echo "content='".$keywords."'"
        ?>
        />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Juan I. Rodríguez"/>

    <!-- Elementos redes sociales-->
    <!-- ETIQUETAS FACEBOOK-->
    <meta property="og:url" content=<?php echo "'".$article_url."'"?> />
    <meta property="og:type" content="article" />
    <meta property="og:title" content=<?php echo "'".$titulo."'"?> />
    <meta property="og:description" content=<?php echo "'".$desc_pagina."'"?> />
    <meta property="og:image" content=<?php echo "'".$thumb."'"?> />
    <!-- ETIQUETAS TWITTER-->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:creator" content="@JuanIRL"/>
    <meta name="twitter:title" content=<?php echo "'".$titulo."'"?>/>
    <meta name="twitter:description" content=<?php echo "'".$desc_pagina."'"?>/>
    <meta name="twitter:image" content=<?php echo "'".$thumb."'"?>/>

    <!-- Elementos SEO-->
    <link rel="canonical" href=<?php echo "'http://www.juanignaciorodriguez.com/mi-camino-a-rio/".$id_post."'";?> />
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
    <?php include_once("analyticstracking.php") ?>
    <nav class="escondido">
      <?php
        $nav='camino';
        include_once('../../nav.php');
      ?>
    </nav>
    <div class="main-container">
      <header class="">
        <div class="tools-group">
          <span class="header-nav-toggle fa fa-bars"></span>
          <span class="header-back fa fa-arrow-left escondido"></span>
        </div>
        <div class="header-logo"><span class="logo-img"></span><b>Juan I. Rodríguez</b> | Web oficial</div>
      </header>
      <section class="post">
        <div class="section-header">
          <div class="section-header-titles">
            <h1>Mi camino a Rio</h1>
            <h5>Sigue mis entrenamientos y competiciones día a día en preparación para los Juegos Olímpicos de Rio 2016</h5>
          </div>
        </div>
        <div class="section-container">
          <article itemscope itemtype="http://schema.org/Article">
            <h2 itemprop="name">
              <?php
                echo $titulo;
              ?>
            </h2>
            <div class="article-thumbnail">
              <img
                <?php
                  echo "src='../".$thumb."' "."alt='".$desc."'";
                ?>
              />
            </div>
            <div class="article-data">
              <div class="article-date" itemprop="datePublished" content=
              <?php
                echo "'".$fecha."'";
              ?>
              >
                <?php
                  echo $fecha;
                ?>
              </div>
              <div class="article-author"></div>
              <div class='share-twitter'>
                <?php
                  echo "<a class='twitter-share-button' href='https://twitter.com/intent/tweet?text=".$titulo."&via=".$id_autor."'>Tweet</a>"
                ?>
              </div>
              <div class='fb-share-button' data-href='' data-layout='button' data-mobile-iframe='true'></div>
              <script>
                $('.fb-share-button').attr('data-href',''+window.location);
              </script>
            </div>
            <div class="article-content" itemprop="articleBody">
              <?php
                echo $content;
              ?>
            </div>
            <div class="miCamino-related">
              <ul>
                <?php
                  if(sizeof($related_posts)>0){
                    echo "Post relacionados | ";
                  }
                  for ($j=0; $j < sizeof($related_posts); $j++) {
                    for ($i=0; $i < sizeof($json['posts']); $i++) {
                      $post=$json['posts'][$i];
                      if($post['id_post']==$related_posts[$j]){
                        echo "<li><a href='../".$post['id_post']."'>".$post['titulo']."</a>"." "."</li>";
                      }
                    }
                  }
                ?>
              </ul>
              <ul>
                <?php
                  if(sizeof($related_links)>0){
                    echo "Enlaces | ";
                  }
                  for ($j=0; $j < sizeof($related_links); $j++) {
                    $substr_link=$related_links[$j];
                    if(strlen($substr_link)>30){
                      $substr_link=substr($related_links[$j],0,20)."...";
                    }
                    echo "<li><a href='http://".$related_links[$j]."' target='_blank'>".$substr_link."</a>"." "."</li>";
                  }
                ?>
              </ul>
            </div>
          </article>
        </div>
      </section>
      <footer>
        <?php
          include_once('../../footer.php');
        ?>

      </footer>
    </div>
    <meta itemprop="url" content=<?php echo "'".$article_url."'"?>>
    <meta itemprop="image" content=<?php echo "'".$thumb."'"?>>
    <span itemprop="author" itemscope itemtype="http://schema.org/Person">
    <meta itemprop="name" content="Juan I. Rodriguez"></span>
  </body>




</html>
