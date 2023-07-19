    
            $(function(){ //
   var navbarTop = $('#navbar').offset().top; // retorna a posicao

   $(window).scroll(function(){ // evento scroll
      var windowTop = $(window).scrollTop();

      if (navbarTop < windowTop) {
          $('#navbar').addClass("  navbar-default .borda navbar-fixed-top"); //adiciona a classe
          //$('#navbar').css({ position: 'fixed', top: 0 }); ou altere o estilo conforme quiser
      } else {
          $('#navbar').removeClass("navbar-fixed-top"); //remove a classe
          //$('#navbar').css('position','static'); ou altere o estilo
      }
  });
});
            