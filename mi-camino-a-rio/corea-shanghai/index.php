<?php

$str=file_get_contents('../blog.json');
$json=json_decode($str,true);
$id_post=basename(getcwd()."");
$titulo="";
$desc_pagina="";
$keywords="";
$article_url=getcwd();
$id_autor="";//Usar id de autor para obtener nombre completo
$fecha="";
$thumb="";
$desc="";
$related_posts=[];
$related_links=[];
$content=file_get_contents('content.html');
for ($i=0; $i < sizeof($json['posts']); $i++) {
  $post=$json['posts'][$i];
  if($post['id_post']==$id_post){
    $titulo=$post['titulo'];
    $desc_pagina=$post['desc_pagina'];
    $keywords=$post['keywords'];
    $id_autor=$post['id_autor'];
    $fecha=$post['fecha'];
    $thumb=$post['thumb'];
    $desc=$post['thumb_desc'];
    /**for ($i=0; $i < sizeof($post['related_posts']); $i++) {
      array_push($related_posts,$post['related_posts'][$i]);
    }
    for ($i=0; $i < sizeof($post['related_links']); $i++) {
      array_push($related_links,$post['related_links'][$i]);
    }*/
  }
}
  require("../plantilla.php");
 ?>
