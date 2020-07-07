@extends('layouts.global')
    @section('content')
		@section ('Title')
        Inicio
    @endsection
    <!--            ---->
 <!-- HERO================================================== -->
    <section>
    <div class="bg-overlay" style="position:relative;">
    <div class="caption-fondo d-none d-md-block fondo-slider"></div>
            <img src="{{asset('/img/fondo1.jpg')}}" alt="" style="height: 100%; width:100%; overflow: hidden;">
            
        </div> 
    </section>
    <!----FIN DE SECTION---->
    <section class="section section-top section-full" style="top: 20px;">
        <!-- Overlay -->
        <div class="bg-overlay sin-bf">
            
        </div>  
        <!-- Triangles -->
        <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
        <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>
        <!-- Content -->
        <div class="container">
            <br><br>
            <div class="row justify-content-end align-items-baseline">
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
    <!-- SECTIONS
    ================================================== -->
            <!-- SERVICES
    ================================================== -->
    <section class="section bg-light">

      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-dark bg-triangle-top bg-triangle-left"></div>
      <div class="bg-triangle bg-triangle-dark bg-triangle-bottom bg-triangle-right"></div>
  
      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-12">
        
            <!-- Heading -->
            <h2 class="text-center mb-4">
              VII CONACIP - UNPRG
            </h2>

            <!-- Subheading -->
            <p class="text-muted text-center mb-5">
            El <strong>VII CONACIP</strong>, delegado por la RUNAECIP para el año 2020 a la <strong>Universidad Nacional Pedro Ruiz Gallo</strong>, 
            se abarca los problemas que enmarcan la coyuntura nacional, la crisis política presentada en nuestro país en estos momentos,
            sistematizando a futuro los distintos escenarios políticos que se presentarán en el 2020, sin dejar de lado el contexto
            conflictivo actual a nivel internacional, así como las nuevas perspectivas teóricas y metodológicas de las ciencias sociales
            en general y la Ciencia Politica en particular.
            </p>

          </div>
        </div>
        <div class="row no-gutters align-items-stretch">
          <div class="col-md-4">
        
            <!-- Card -->
            <div class="card card-tall card-stretch border-0 mb-3 md-md-0">
          
              <!-- Image -->
              <div class="bg-cover" style="overflow: hidden;">
            

              <!-- Overlay -->
              <div class="bg-overlay"></div>

              <!-- Body -->
              <div class="card-body">

                <!-- Icon -->
                <div class="card-icon text-primary">
                  <span class="icon icon-layers"></span>
                </div>
          
                <!-- Title -->
                <h4 class="card-title text-white text-center">
                  Misión
                </h4>

                <!-- Text -->
                <p class="card-text text-white text-muted mb-0 font-10">
                Contribuir al desarrollo de la ciencia política, difusión de conocimientos de investigación científica, 
                incentivar y promover mayor participación y compromiso para el fortalecimiento de la Red Universitaria Nacional de 
                Escuelas de Ciencia Política (RUNAECIP).
                </p>

              </div>

            </div> <!-- / .card -->

          </div>
          <div class="col-md-4">
        
            <!-- Card -->
            <div class="card card-tall card-stretch card-standout shadow border-0 mb-3 md-md-0">
          
              <!-- Image -->
              <div class="bg-cover" style="overflow:hidden;">
            

              <!-- Overlay -->
              <div class="bg-overlay"></div>

              <!-- Body -->
              <div class="card-body">

                <!-- Icon -->
                <div class="card-icon text-primary">
                  <span class="icon icon-tick"></span>
                </div>
          
                <!-- Title -->
                <h4 class="card-title text-white text-center">
                  Objetivo
                </h4>

                <!-- Text -->
                <p class="card-text text-white text-muted mb-0 font-10">
                •	Analizar la coyuntura nacional de Estado, teniendo en cuenta la crisis en el Perú como en Latinoamérica, ante esto promover soluciones. <br>
                •	Sensibilizar a nuestra sociedad de los cambios que puede dar un politólogo a los problemas que presenta nuestra política y sociedad.
                </p>

              </div>

            </div> <!-- / .card -->

          </div>
          <div class="col-md-4">
        
            <!-- Card -->
            <div class="card card-tall card-stretch border-0">
          
              <!-- Image -->
              <div class="bg-cover" style="overflow: hidden;">
            

              <!-- Overlay -->
              <div class="bg-overlay"></div>

              <!-- Body -->
              <div class="card-body">

                <!-- Icon -->
                <div class="card-icon text-primary">
                  <span class="icon icon-puzzle"></span>
                </div>
          
                <!-- Title -->
                <h4 class="card-title text-white text-center">
                  Visión
                </h4>

                <!-- Text -->
                <p class="card-text text-white text-muted mb-0 font-10">
                Contribuir como organizadores la participación e incentivar a directores y otras Autoridades Universitarias en la 
                institucionalización de la Escuela Académica Profesional de Ciencia Política a nivel nacional. 
                </p>

              </div>

            </div> <!-- / .card -->

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>
    
    <!-- PAGES    ================================================== -->
    <section class="section" id="pages">
        <!-- Content -->
        <div class="container">
            <!-- 
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    /******* Heading  */ 
                    <h2 class="text-center mb-4">
                        AQUI nompre de Ponentes
                    </h2>
                    /****** Subheading */
                    <p class="text-muted text-center mb-5">
                        Contamos con la participacion de ponentes internaconales.
                    </p>
                </div>
            </div>
        <div class="row text-center">
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>            
            </div>        
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h2>Heading</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            </div>
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            </div>
        </div>-->
    <!--------------AQUI EL HR------------>
    
    <!------------------------------------------------>
        <!-- Subheading -->
            <p class="text-muted text-center mb-5">
                Contamos con la participacion de ponentes nacionales.
            </p>

            <!---------------------------------------------->
        </div> <!-- / .container -->
    </section>

    <!-- HEADERS
    ================================================== -->
    <!-- QUOTE
    ================================================== -->
 
    <!-- FEATURES
    ================================================== -->
    <section class="section bg-dark" style="background-color: #121f47!important; padding-top: 3.5rem; padding-bottom: 3.5rem;">
    <div class="bg-overlay sin-bf">
            
        </div> 
      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-light bg-triangle-top bg-triangle-left"></div>
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

      <!-- Content -->
      <div class="container">
        
        <div class="row justify-content-center">
        
          <div class="col-md-8 col-lg-6 text-center">
            
            <!-- Heading -->
          </div>
          
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-md-12 text-center">
            <br>
            <div class="btn" style="border-color: white; border-radius: 30px; background-color: #fd29ac61; text-transform: none; font-size: large;">
                
              <div class="row text-white">
                <div class="col-2 text-center">
                  <i class="fa fa-info-circle fa-2x" aria-hidden="true"></i>                
                </div>
                <div class="col-10">
                  <span class="text-muted" style="color: #01f79c!important;">Recepción de articulos cientificos finales <br> hasta el </span><strong>20 de junio del 2020</strong>
                </div>
              </div>
              <a href="https://drive.google.com/file/d/1CWnL3iO9Kqgqv97TiPy4BbUkLYm2RRdG/view" target="_blank" class="text-white"> <strong> Bases Aqui</strong></a>
            </div>
          </div>
          <div class="col-md-12">
            <!-- Item -->
            <div class="text-center mb-5 mb-md-0">
              <!-- Icon -->
              <div class="text-primary mb-4">
                <span class="icon-devices icon-2x"></span>
              </div>
              <!-- Content -->
              <span class="text-white ">
                <div class="text-muted  mb-0">Levantamiento de observaciones:</div>
                <strong>20 de Agosto del 2020</strong>
              </span>
              <span class="text-white">
                <div class="text-muted mb-0">Entrega final de articulos cientificos corregidos:</div>
                20 de Septiembre del 2020
              </span>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>
    <!-- PRICING
    ================================================== -->
    <section class="section">
      
      <!-- Content -->
      <div class="container text-center">
      
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">

            <!-- Heading -->
            <h2 class="text-center mb-4">
             PRECIO DE INSCRIPCIÓN
            </h2>
          </div>
        </div> <!-- / .row -->
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
        
            <!-- Card -->
            <div class="card card-lg bg-white card-active mb-3 mb-lg-0">
          
              <!-- Body -->
              <div class="card-body text-center color-bg">

                <!-- Title -->
                <h4 class="card-title">
                  Hasta el 26 de mayo
                </h4>

                <!-- Price 
                <h3 class="card-title font-weight-normal text-primary">
                  $49.00
                </h3>-->

                <!-- Text -->
                <ul class="card-text list-iconed">
                  <li class="list-iconed-item">
                    <div class="row">
                      <div class="col-8">
                      Estudiantes ponentes:
                      </div>
                      <div class="col-4 text-right"> S/50</div>
                    </div>
                  </li>
                  <li class="list-iconed-item">
                    <div class="row">
                      <div class="col-8">
                      Público en general ponentes:
                      </div>
                      <div class="col-4 text-right"> S/100</div>
                    </div>
                  </li>
                  <li class="list-iconed-item">
                    <div class="row">
                      <div class="col-8">
                      Estudiante de pre–grado:
                      </div>
                      <div class="col-4 text-right"> S/70</div>
                    </div>
                  </li>
                  <li class="list-iconed-item">
                    <div class="row">
                      <div class="col-8">
                      Egresados y Público en general :
                      </div>
                      <div class="col-4 text-right"> S/90</div>
                    </div>
                  </li>
                </ul>
              </div>
          
            </div> <!-- / .card -->

          </div>
          <div class="col-md-6 col-lg-4">
        
            <!-- Card -->
            <div class="card card-lg bg-white card-active mb-3 mb-lg-0">
          
              <!-- Body -->
              <div class="card-body text-center color-bg">

                <!-- Title -->
                <h4 class="card-title">
                  Del 27 de mayo al 20 de Septiembre
                </h4>

                <!-- Price 
                <h3 class="card-title font-weight-normal text-primary">
                  $490.00
                </h3>-->

                <!-- Text -->
                <ul class="card-text list-iconed">
                  <li class="list-iconed-item">
                    <div class="row">
                      <div class="col-8">
                      Estudiante de pre–grado:
                      </div>
                      <div class="col-4 text-right"> S/90</div>
                    </div>
                  </li>
                  <li class="list-iconed-item">
                    <div class="row">
                      <div class="col-8">
                      Egresados y Público en general:
                      </div>
                      <div class="col-4 text-right"> S/110</div>
                    </div>
                  </li>
                  
                </ul>
              </div>
          
            </div> <!-- / .card -->

          </div>
            <!-- Subheading -->
           <!-- Button --><br>
           
        </div> <!-- / .row -->
        <br>
        <div class="card-lg">
           <a href="{{route('registro')}}" class="btn btn-outline-primary btn-new">
                  Inscripción
                </a>


      </div> <!-- / .container -->

    </section>
    <!-- ABOUT
    ================================================== -->
    <section class="section">

      <!-- Content -->
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-lg-5 offset-lg-1 order-md-2">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.5128148430144!2d-79.90886868585747!3d-6.707090667437933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904ced9307db00dd%3A0xd82bb63ce69b1c52!2sUniversidad%20Nacional%20Pedro%20Ru%C3%ADz%20Gallo!5e0!3m2!1ses-419!2spe!4v1581372221855!5m2!1ses-419!2spe" width="auto" height="auto" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen=""></iframe>
            <!-- Image -->

          </div>
          <div class="col-md-6 col-lg-4 offset-lg-1 order-md-1">

            <!-- Heading -->
            <h2 class="mb-4">
              UNIVERSIDAD NACIONAL PEDRO RUIZ GALLO - UNPRG
            </h2>

            <!-- Content -->
            <ul class="list-iconed text-muted">
              <li class="list-iconed-item">
              Calle Juan XXII N° 391 Ciudad Universitaria
              </li>
              <li class="list-iconed-item">
                Lambayeque
              </li>
              <li class="list-iconed-item">
              Telefax: 074-283234
              </li>
            </ul>

            <!-- Button 
            <a href="https://yevgenysim.github.io/incline/documentation.html" class="btn btn-outline-primary">
              Documentation
            </a>-->
        
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>
    <!-- CTA
    ================================================== -->
    <section>
      </section>


    <section class="section bg-light">

      <!-- Content -->
      <div class="container">
        <div class="col-12 text-center">
          <h3 class="mb">
             <strong>RUNAECIP</strong>
            </h3>
            <!-- Subheading -->
            <span class="text-muted mb-4 mb-md-0">
              RED UNIVERSITARIA NACIONAL DE ESCUELAS DE CIENCIA POLÍTICA
            </span>
        </div> 
        <br>
        <div class="row align-items-center justify-content-center">
          <div class="col-md text-center" >
          <div class="container" >
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox" style="display:inherit; height:200px;">
            <div class="carousel-item margin-carouselr col-md-3  active  ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                  
            </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item margin-carouselr col-md-3  ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                  
                  </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item margin-carouselr col-md-3  ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                  
                  </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item margin-carouselr col-md-3  ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                  
                  </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item margin-carouselr col-md-3 ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item margin-carouselr col-md-3  ">
              <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item margin-carouselr col-md-3  ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    
                    </a>
                  </div>
                </div>
            </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>



@endsection


