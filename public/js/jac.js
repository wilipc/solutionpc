$(function () {
  var $win = $(window);
  var $pos = 560;
  var $posMenu = 225;
  $win.scroll(function () {
      if ($win.scrollTop() <= $pos) {
          $(".fondo-nav").attr("style", "");
          $(".contenedor-b").attr("style", "top:0px;");
          //$(".banner-logo").attr("style", "position:absolute;");

      } else {
          $(".contenedor-main").addClass("fijar-top");
          $(".fondo-nav").attr("style", "background-color:#121f47;");
          $(".contenedor-b").attr("style", "top:55px; position:relative;");
          //$(".banner-logo").attr("style", "position:static;");
      }

      if ($win.scrollTop() >= $posMenu) {
          $(".contener-left").attr("style", "top:55px;position:fixed;");
          
          //$(".right-tp").addClass("fijar-subtop");
          
          //$(".right-bt").attr("style", "top:65px; position:relative;");
      } else {
          $(".contener-left").attr("style", "position:absolute;");

          //$(".right-tp").removeClass("fijar-subtop");
          //$(".right-bt").attr("style", "");
          
        }

  });

});