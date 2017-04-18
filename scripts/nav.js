$(document).ready(function(){
  var navMenu=$('nav'),
  arrowBack=$('.tools-group .header-back'),
  navClose=$('.nav-close i'),
  body=$('body'),
  headerNavToggle=$('.header-nav-toggle'),
  lastScrollPos=0,
  navScrollIndex=80;
  var cerrarNav=function(){
    navMenu.addClass('escondido');
    $('.sombreado').remove();
  }
  var abrirNav=function(){
    navMenu.removeClass('escondido');
    body.append("<div class='sombreado activo'></div>");
  }
  navClose.on('click',function(){
    cerrarNav();
  });
  headerNavToggle.on('click',function(){
    abrirNav();
  });
  arrowBack.on('click',function(){
    window.history.back();
  });
  $(window).scroll(function(){
    var desplazamiento=window.scrollY;
    if(desplazamiento>navScrollIndex){
      $('header').addClass('fixed');
    }else{
      $('header').removeClass('fixed');
    }
    if(desplazamiento>navScrollIndex && desplazamiento<lastScrollPos && navMenu.hasClass('escondido')){
      arrowBack.removeClass('escondido');
      lastScrollPos=desplazamiento;
      return;
    }
    arrowBack.addClass('escondido');
    lastScrollPos=desplazamiento;
  });

});
