<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('/img/minilogospc2.png')}}">
    <title>SOLUTIONPC | @yield('Title', 'Default')</title>    

    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-----Stilos Bootstrap------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!-----Fin stylos bootstrap----->
    <script type="text/javascript" charset="UTF-8" src="{{asset('js/jsc.jsx')}}"></script>
  <!-----------      styleCarousel        --------->
</head>
<body>
    <nav class="navbar navbar-expand-xl navbar-togglable fixed-top navbar-dark shadow p-3 mb-5 fondo-nav">
        <div class="container">
            <div class="row" style="width:100%;">
                <div class="col">
                    <a class="navbar-brand" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="{{asset('/img/logospc2.png')}}"  style="width: 35%;" class="img-responsive">
                    </a>
                    <a class="navbar-brand" style="padding-top: 0px; padding-bottom: 0px;display:none;">
                        <img src="{{asset('/img/minilogospc.png')}}"  style="width: 20%;" class="img-responsive">
                    </a>
                </div>
                <div class="col align-self-end text-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Collapse -->
                    <div class="collapse navbar-collapse" id="navbarCollapse" >
                        <!-- Links -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('inicio')}}" id="navbarWelcome" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false">
                                    INICIO
                                </a>
                            </li><!--
                           <li class="nav-item">
                                <a class="nav-link " href="{{route('galeria')}}" id="navbarLandings" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false">
                                    GUIA TURISTICA
                                </a>
                            </li>
-->
                            <li class="nav-item-divider">
                                <span class="nav-link">
                                    <span></span>
                                </span>
                            </li>
                            <li class="nav-item ">
                                <a href="" class="nav-link">
                                    CONTACTO
                                </a>
                            </li>
                        </ul>
                    </div> <!-- / .navbar-collapse -->
                </div>
            </div> 
            <!-- Brand -->
        </div> <!-- / .container -->    
    </nav>
    <!---- Container ----->
    <div class="content">
        @yield('content')
    </div>
    <!-------------------->
    <!-- FOOTER
    ================================================== -->
    <footer class="section bg-dark" style="background-color: #121f47!important; padding-top:2rem; padding-bottom:2rem;">
      <div class="row container text-center" style="max-width: inherit;">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <a href="https://preview.webpixels.io/quick-website-ui-kit/index.html">
          </a>
        </div>
        <div class="col-lg-6 col-sm-4 mb-5 mb-lg-0 text-md-right">
          <h6 class="heading mb-3 text-white" ><strong>CONTACTANOS</strong></h6>
          <ul class="list-unstyled">
            <li>
              <a href="https://www.facebook.com/VIICONACIP" target="_blank" class="text-white">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="" class="text-white">viiconacip.unprg@gmail.com</a>
            </li>
            <li>
              <a href="{{route('login')}}" class="text-white">@CONACIP</a>
            </li>
          </ul>
        </div>
      </div>

        <!-- Triangles -->
        <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
        <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>
        <!--Content -->
    </footer>
    <div style="background-color: #09163e; color: #f8f9fa; max-width: 100%; height: auto">
        <div class="container" style="padding-top:15px; padding-bottom:10px;">
            <div class="row">
                <div class="col-md">
                    <small class="text-muted">
                        © Copyright <span class="current-year">2020</span> | Todos los derechos reservados.
                    </small>
                </div> 
                <div class="col-md">
                    <ul class="list-unstyled list-inline text-md-right">
                        <li class="list-inline-item text-white">
                            <a href="https://www.facebook.com/wilipc" target="_blank">Desarrollador</a>
                        </li>
                    </ul>
                </div> 
            </div>            
        </div>
    </div>
     
<!------------------------------------------------------------------------>
    <!--Scrip bootstrap ---->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!--Fin Scrip bootstrap ---->

    <script src="{{asset('js/jac.js')}}"></script> 


  
<script language="javascript">
$('#myCarousel').on('slide.bs.carousel', function (e) {

  
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.carousel-item').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});


  $('#myCarousel').carousel({ 
                interval: 2000
        });


  $(document).ready(function() {
/* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
      event.preventDefault();
      var content = $('.modal-body');
      content.empty();
        var title = $(this).attr("title");
        $('.modal-title').html(title);        
        content.html($(this).html());
        $(".modal-profile").modal({show:true});
    });

  });
  </script>

</body>
</html>