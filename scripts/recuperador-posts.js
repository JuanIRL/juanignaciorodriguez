var posts=[],
qty=0
maxPosts=3;
var creaArticulo= function(post){

  return "<article><div class='article-thumbnail'><a href='"+post.id_post+"/'><img src='"+post.thumb+"' alt='"+post.desc+"'/><div class='article-title'><h2>"+post.titulo+"</h2></div></a></div><div class='article-data'><div class='article-date'>"+post.fecha+"</div><div class='article-author "+post.id_autor+"'></div><div class='share-twitter'><a class='twitter-share-button' href='https://twitter.com/intent/tweet?text="+post.titulo+"&via=JuanIRL&url="+encodeURIComponent(window.location+""+post.id_post)+"'>Tweet</a></div><div class='fb-share-button' data-href='"+window.location+""+post.id_post+"' data-layout='button' data-mobile-iframe='true'></div></div><div class='article-sneak'>"+post.sneak+"</div><a href='"+post.id_post+"'class='boton verde'>Ver post</a></article>"

}
$(document).ready(function(){
  $.getJSON("blog.json",function(data){
    posts=data.posts;
    qty=data.total;
    $('.miCamino .section-container').prepend(creaArticulo(posts[0]));
    for(var i=1;i<=Math.min(maxPosts-1,qty);i++){
      $('.miCamino .section-container').append(creaArticulo(posts[i]));
    }
  });

});
