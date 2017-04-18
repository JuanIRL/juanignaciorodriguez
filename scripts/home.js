var played=false;
$(document).ready(function(){
  //$(window).bind("load", function() {
  //  $('.logo').addClass('animated').addClass('slideInDownFade');
  //});
  window.scrollTo(0,1);
  window.scrollTo(0,0);

  $('.gancho').each(function(){
    var txt=$(this).children('.text').text();
    txt=txt.split(" ");
    var txt2="";
    for(i=0;i<txt.length;i++){
      txt2=txt2 + "<span class='text-in'>" + txt[i] + "</span> "
    }
    $(this).children('.text').html(txt2);

  });



  $('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 1000);
    return false;
  });
  $('body').keydown(function(e){
    var nextCard="";
    var prevCard="";
    var currentMaxOffset=50000;
    var currentMinOffset=-10;
    $('.card').each(function(index){
      if($(this).offset().top > window.pageYOffset && $(this).offset().top < currentMaxOffset){
        nextCard=$(this).attr('id');
        currentMaxOffset=$(this).offset().top;
        console.log("Siguiente: " + nextCard + "; Offset maximo: " + currentMaxOffset);
      }
      if($(this).offset().top < (window.pageYOffset - $(this).height()+5) && $(this).offset().top > currentMinOffset){
        prevCard=$(this).attr('id');
        currentMinOffset=$(this).offset().top;
        console.log("Anterior: " + prevCard + "; Offset minimo: " + currentMinOffset);
      }
    });
    console.log("Tarjeta siguiente: "+nextCard + "; Tarjeta anterior: " + prevCard);
    if(e.keyCode=="40"){//Abajo
      $('html, body').animate({
          scrollTop: $( $("#"+nextCard)).offset().top
      }, 1000);
    }
    if(e.keyCode=="38"){//Arriba
      $('html, body').animate({
          scrollTop: $( $("#"+prevCard)).offset().top
      }, 1000);
    }
  });
  $(window).scroll(function(){
    var desplazamiento=window.scrollY,
    videoPosition=$('#home-tiroconarco').offset().top,
    miCaminoPosition=$('.home-miCamino').offset().top,
    patrocinadoresPosition=$('.home-patrocinadores').offset().top,
    tiroconarcoPosition=$('.home-tiroconarco').offset().top;
    console.log(miCaminoPosition +" "+ patrocinadoresPosition +" "+ tiroconarcoPosition);
    if(desplazamiento>videoPosition-(window.innerHeight/2) && !played){
      $('#home-tiroconarco').get(0).play();
      played=true;
    }
    if(desplazamiento > miCaminoPosition - (window.innerHeight/1.2)){
      $('.home-miCamino .gancho .text .text-in').each(function(i){
        var letra=$(this);
        setTimeout(function(){
          letra.addClass('home-text-in-left');
        },i * 80);
        $('.home-miCamino .boton').addClass('pop-in');
      });
    }
    if(desplazamiento > patrocinadoresPosition - (window.innerHeight/1.2)){
      $('.home-patrocinadores .gancho .text .text-in').each(function(i){
        var letra=$(this);
        setTimeout(function(){
          letra.addClass('home-text-in-up');
        },i * 80);
        $('.home-patrocinadores .boton').addClass('pop-in');
      });
    }
    if(desplazamiento > tiroconarcoPosition - (window.innerHeight/1.2)){
      $('.home-tiroconarco .gancho .text .text-in').each(function(i){
        var letra=$(this);
        setTimeout(function(){
          letra.addClass('home-text-in-right');
        },i * 80);
        $('.home-tiroconarco .boton').addClass('pop-in');
      });
    }

  });

})
