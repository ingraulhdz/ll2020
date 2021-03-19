<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Carousel Template · Bootstrap v5.0</title>
<!-- <script type="applisalonion/x-javascript">
	 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
	 function hideURLbar(){ window.scrollTo(0,1); }
	 </script> -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="front/css/iconeffects.css" rel='stylesheet' type='text/css' />
<link href="front/css/style.css" rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="front/css/swipebox.css">

<script src="front/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="front/js/move-top.js"></script>
<script type="text/javascript" src="front/js/easing.js"></script>



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <!-- <a class="navbar-brand" href="#">Carousel</a> -->
	   <!--logo-->
			       <div class="loga navbar-brand">
                      <a href="index.html"><h1>L<span>a Loma</span></h1></a>
					  <p>Mexico</p>
				   </div>
					<!--//logo-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>

		     <li class="nav-item">
            <a class="nav-link"data-hover="Acerca" href="#about" class="scroll">Acerca</a>
          </li>


		       <li class="nav-item">
            <a class="nav-link"data-hover="Actividades" href="#activities" class="scroll">Actividades</a>
          </li>

		       <li class="nav-item">
            <a class="nav-link"data-hover="Proyectos" href="#activities" class="scroll">Proyectos</a>
          </li>

     

		       <li class="nav-item">
            <a class="nav-link"data-hover="Galeria" href="#gallery" class="scroll">Galeria</a>
          </li>

		       <li class="nav-item">
            <a class="nav-link"data-hover="Contacto" href="#contact" class="scroll">Contacto</a>
          </li>



        </ul>
        <div class="d-flex">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">

		  
                                      @if (Route::has('login'))
                    @auth
					<li class="nav-item">
            <a class="nav-link"data-hover="Proyectos" href="{{url('/home')}}" >Dashboard</a>
          </li>

                    @else
					<li class="nav-item">
            <a class="nav-link"data-hover="Entrar" href="{{route('login')}}" >Entrar</a>
          </li>


                        @if (Route::has('register'))
						<li class="nav-item">
            <a class="nav-link"data-hover="Registrar" href="{{route('register')}}" >Registrar</a>
          </li>
	</ul>
                        @endif
                    @endauth
            @endif


        </div>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette" id="about">
      <div class="col-md-5 ab-text">
     <h3 class="tittle wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">Bienvenido</h3>
						  <div class="arrows-two wow slideInDown"  data-wow-duration="1s" data-wow-delay=".5s"><img src="front/images/border.png" alt="border"/></div>
						  <p class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">
							Esta página web es sin fines de lucro , con la iniciativa de recolectar donativos en pro de el desarrollo del pueblo,  los cuales van a ser totalmente de  públicos tanto cantidad como el nombre del donante, estos donativos van a ser totalmente para uso de obras públicas, con el único objetivo de mejorar nuestra infraestructura y calidad de vida, cada proyecto que sea realizado con estos fondos va a ser expuesto y detallado.
							<div class="start wow flipInX"  data-wow-duration="1s" data-wow-delay=".3s">
						     <a href="#" class="hvr-bounce-to-bottom">Leer Mas</a>
						  </div>

      </div>
      <div class="col-md-7 ab-left">
		  	 <div class="grid">

				<div class="h-f wow slideInLeft"  data-wow-duration="1s" data-wow-delay=".2s">
					<figure class="effect-jazz">
					<img src="front/images/s1.jpg" alt="img25"/>
						<figcaption>
							<h4>Gente  <span>Amable</span></h4>
							<p>La amabilidad es generosidad y hay que derrocharla. Hay que ser amables con todo el mundo, no solo con las personas que
							conocemos. La amabilidad abre puertas, a culturas y ayuda a una convivencia mejor.</p>
							
						</figcaption>			
					</figure>
					
				 </div>


				 <div class="h-f wow slideInLeft"  data-wow-duration="1s" data-wow-delay=".2s">
					<figure class="effect-jazz">
						<img src="front/images/s2.jpg" alt="img25"/>
						<figcaption>
							<h4>Contacto con  <span>Naturaleza</span></h4>
							<p>Todos los seres humanos tenemos una conexión neurobiológica con la naturaleza. Estar en contacto con ella nos
							proporciona bienestar físico y mental.</p>
							
						</figcaption>			
					</figure>
				 </div>

      	</div>
      </div>
    </div>



    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-5 order-md-2 ab-text two">
             <h5 class="tittle wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">Acerca de La Loma</h5>
						 <div class="arrows-two wow slideInDown"  data-wow-duration="1s" data-wow-delay=".5s"><img src="front/images/border.png" alt="border"/></div>
						  <p class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">
					El nombre oficial de La Loma es Santa Maria La Loma,  situado en el Municipio de Acambay
					(en el Estado de México, con una poblacion aproximada de  1274 residentes, segun datos del INEGI 2018.
					Dentro de todos los pueblos del municipio, ocupa el número 10 en cuanto a número de habitantes.
					La Loma (Santa María la Loma) está a 2681 metros de altitud. sobre el nivel del mar, cuenta con  diversos paisajes naturales, 
					como cerros y arroyos exelentes  para practivar actividades al aire libre, cabalgatas, rutas 4x4, camping, entre otras.
						</p>
						 <div class="start wow flipInX"  data-wow-duration="1s" data-wow-delay=".3s">
						     <a href="#" class="hvr-bounce-to-bottom">Leer Mas</a>
						  </div>
						 </div>
						<div class="col-md-7 order-md-1 ab-left">
					<div class="grid">
			        <div class="h-f  wow slideInRight"  data-wow-duration="1s" data-wow-delay=".2s">
					<figure class="effect-jazz">
					<img src="front/images/s4.jpg" alt="img25"/>
						<figcaption>
							<h4>Nuestras <span>Cabalgatas</span></h4>
							<p>Continuamente los habitantes organizan recorridos a caballo por los paisajes naturales que rodean a la comunidad,</p>
							
						</figcaption>			
					</figure>
					
				 </div>
				 <div class="h-f  wow slideInRight"  data-wow-duration="1s" data-wow-delay=".2s">
					<figure class="effect-jazz">
						<img src="front/images/s3.jpg" alt="img25"/>
						<figcaption>
							<h4>Nuestras  <span>Rutas</span></h4>
							<p>Nuestros cerros se prestan perfectamente para rutas 4x4, llenos de brechas, llanuras y veredas</p>
						
						</figcaption>			
					</figure>
					
				 </div>
				 <div class="clearfix"> </div>
				 </div>
      </div>
    </div>



    <hr class="featurette-divider">

    <div class="row featurette" id="activities">
	 <h3 class="tittle wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">Que hacer?</h3>
		<div class="arrows-two wow slideInDown"  data-wow-duration="1s" data-wow-delay=".5s"><img src="front/images/border.png" alt="border"/></div>
		 <p class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">
	 alidad de vida, cada proyecto que sea realizado con estos fondos va a ser expuesto y detallado.
							



     <div class="inst-grids">
		<div class="row">

					<div class="col-md-3 services-gd text-center wow slideInLeft"  data-wow-duration="1s" data-wow-delay=".3s">
						<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
							<a href="#" class="hi-icon"><img src="front/images/serve1.png" alt=" " /></a>
						</div>
						<h4>Gastronomia</h4>
						 <p>Degustate con los mejores platillos Mexicanos con el toque especial del pueblo.</p>
					</div>

					<div class="col-md-3 services-gd text-center wow slideInDown"  data-wow-duration="1s" data-wow-delay=".2s">
						<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
							<a href="#" class="hi-icon"><img src="front/images/serve2.png" alt=" " /></a>
						</div>
						<h4>Cabalgatas</h4>
						 <p>Olvidate de el estres con un paseo a caballo recorriendo los mas bellos paisajes de la region.</p>
					</div>

					<div class="col-md-3 services-gd text-center wow slideInUp"  data-wow-duration="1s" data-wow-delay=".2s">
						<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
							<a href="#" class="hi-icon"><img src="front/images/serve3.png" alt=" " /></a>
						</div>
						<h4>Rutas 4x4</h4>
						 <p>Cerros, arrollos, y barrancos te esperan para una aventura extre 4x4</p>
					</div>

					<div class="col-md-3 services-gd text-center wow slideInRight"  data-wow-duration="1s" data-wow-delay=".3s">
						<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
							<a href="#" class="hi-icon"><img src="front/images/serve4.png" alt=" " /></a>
						</div>
						<h4>Feria</h4>
						 <p>Julio es el mes mas esperado en el pueblo</p>
					</div>

					<div class="clearfix"> </div>		
				</div>
				</div>
    </div>

    <hr class="featurette-divider">



    <div class="row featurette"  id="projects">
   <h3 class="tittle">Proyectos</h3>
			<div class="arrows-serve"><img src="front/images/border.png" alt="border"></div>
<div class="inst-grids">
<div class="row">

	 		   <div class="col-md-3 s-1 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".3s">
			   <a href="#">
	 		   	<div class="view view-fifth">
                    <img src="front/images/chef1.jpg" alt="chef">
                    <div class="mask">
                        <h4>Lienzo Charro</h4>
                        <p>El proyecto mas reciente, un lienzo charro para inculcar el deporte de la charreria en la juventud.</p>
                         <!-- <p class="p2">A wonderful serenity has taken possession of my entire soul, I enjoy with my whole heart.</p> -->
                     </div>
                   
				    </div>
            </a>
			<h3> Lienzo Charro</h3>
				</div>



		<div class="col-md-3 s-2 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".3s">
		<a href="#">
	 		   	<div class="view view-fifth">
                      <img src="front/images/chef3.jpg" alt="chef">
                       <div class="mask">
                        <h4>Remodelacion y Mantenimiento del Centro</h4>
                        <p>Continuamente se realizan tareas para dar un mejor aspecto a el centro de la comunidad</p>
                     </div>
               
				    </div>
				  </a>
				<h3>Remodelacion del centro</h3>
				</div>


			  <div class="col-md-3 s-3 wow slideInRight" data-wow-duration="1s" data-wow-delay=".3s">
			  <a href="#">
	 		   	<div class="view view-fifth">
                     <img src="front/images/chef2.jpg" alt="chef">
                    <div class="mask">
                        <h4>Futbol Rapido</h4>
                        <p> Reactivacion de la cancha de futbol rapido para que los jovenes sigan practicando futbol.</p>
                     </div>
                  
				    </div>
				  </a>
					<h3>Futbol Rapido</h3>
				</div>


				<div class="col-md-3 s-4 wow slideInRight" data-wow-duration="1s" data-wow-delay=".3s">
				 <a href="#">
	 		   	 <div class="view view-fifth">
                      <img src="front/images/chef4.jpg" alt="chef">
                    <div class="mask">
                        <h4>Juegos y parque </h4>
                        <p>Se planea realizar un parque seguro y limpio para convivir en familia.</p>
                     </div>
                   
				    </div>
				  </a>
					<h3>Juegos para Ninos</h3>
				</div>

				
	</div>
				<div class="clearfix"></div>
		     </div>


	</div>

    <hr class="featurette-divider">


	    <div class="row featurette" >
   <div class="col-md-6 test-left-img">
			   </div>

			   <div class="col-md-6 test-monials">
					<h3 class="tittle">Testimonios de visitantes.</h3>
					<div class="arrows-serve test"><img src="front/images/border.png" alt="border"></div>
					<!--//screen-gallery-->
						<div class="sreen-gallery-cursual">
							 <!-- required-js-files-->
							<link href="front/css/owl.carousel.css" rel="stylesheet">
							    <script src="front/js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
								 <!--//required-js-files-->
						       <div id="owl-demo" class="owl-carousel">
					                 <div class="item-owl">
					                		<div class="test-review">
											   <p class="wow fadeInUp"  data-wow-duration=".8s" data-wow-delay=".4s"><img src="front/images/left-quotes.png" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <img src="front/images/right-quotes.png" alt=""></p>
						                	  <img src="front/images/t3.jpg" class="img-responsive" alt=""/>
											  <h5 class="wow bounceIn"  data-wow-duration=".8s" data-wow-delay=".2s">Martin H. Joseph</h5>
					                	    </div>
					                </div>
					                 <div class="item-owl">
					                	<div class="test-review">
										 <p class="wow fadeInUp"  data-wow-duration=".8s" data-wow-delay=".4s"> <img src="front/images/left-quotes.png" alt="">Polite sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<img src="front/images/right-quotes.png" alt=""></p>
						                	<img src="front/images/t2.jpg" class="img-responsive" alt=""/>
											 <h5 class="wow bounceIn"  data-wow-duration=".8s" data-wow-delay=".2s">Dennis Pal,</h5>
					                	</div>
					                </div>
					                 <div class="item-owl">
					                	<div class="test-review">
										     <p class="wow fadeInUp"  data-wow-duration=".8s" data-wow-delay=".4s"><img src="front/images/left-quotes.png" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <img src="front/images/right-quotes.png" alt=""></p>
						                	<img src="front/images/t1.jpg" class="img-responsive" alt=""/>
											 <h5 class="wow bounceIn"  data-wow-duration=".8s" data-wow-delay=".2s">Martin H.Wilson</h5>
					                	</div>
					                </div>
				              </div>
						<!--//screen-gallery-->
					</div>


	</div>


	    <hr class="featurette-divider">

		   <div class="row featurette"  id="gallery">

		   <h3 class="tittle">Galeria</h3>
		<div class="arrows-serve"><img src="front/images/border.png" alt="border"></div>
				<div class="gallery-grids">


				<div class="row">

					<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
						<a href="images/g1.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="front/images/g1.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Iglecia</h4>
										<span class="separator"></span>
										<p>La iglecia del pueblo construida hace mas de 50 años.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
						<a href="images/g2.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="front/images/g2.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Pulque</h4>
										<span class="separator"></span>
										<p>Al ser un lugar rodeado de magueyes, varias personas de el publo se dedican a producir delicioso pulque</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					</div>

						<div class="row">

					<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
						<a href="images/c1.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="front/images/c1.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Enchiladas</h4>
										<span class="separator"></span>
										<p>Las enchiladas son un plato tipico de nuestra comunidad, rojas, con manteca de cerdo son deliciosas!.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInDown animated" data-wow-delay=".5s">
						<a href="images/c2.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="front/images/c2.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Rutas 4x4</h4>
										<span class="separator"></span>
										<p>Las mejores aventuras te esperan.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
						<a href="images/c3.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="front/images/c3.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Paisajes</h4>
										<span class="separator"></span>
										<p>Rodeados de paisajes panoramicoss.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInDown animated" data-wow-delay=".5s">
						<a href="images/c4.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="front/images/c4.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Julio</h4>
										<span class="separator"></span>
										<p>Julio es el mes mas esperado, cada año se realiza la fiesta patronal..</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
										</div>




										
					<div class="row">

					<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
						<a href="images/g7.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="front/images/g7.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Santa Maria La Loma</h4>
										<span class="separator"></span>
										<p>Pertenece al Municipio de Acambay, en el Estado de Mexico.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
						<a href="images/g8.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="front/images/g8.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4> Visitanos</h4>
										<span class="separator"></span>
										<p>Visita La Loma, te aseguramos que querras volver.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					</div>
					<div class="clearfix"> </div>


							</div>
	</div>


	    <hr class="featurette-divider">

				   <div class="row featurette">



				     <div class="bottom">
		<div class="container">
		       <div class="bottom-top">
			    <h3 class=" wow flipInX"  data-wow-duration="1s" data-wow-delay=".3s">Todos Son Bienvienidos </h3>
				<span>en La Loma</span>
				   <p class="wow slideInDown" data-wow-duration="1s" data-wow-delay=".5s">
No dudes en visitar el pueblo, te aseguramos que quedaras enamorado de el ambiente, la calides de la gente, la comida y la forma en que viven la vida los habitantes				   <div class="start wow flipInX"  data-wow-duration="1s" data-wow-delay=".3s">
						     <a href="single.html" class="hvr-bounce-to-bottom">Read More</a>
						  </div>
			   </div>
		</div>



		   
	</div>


	    <hr class="featurette-divider">

				   <div class="row featurette"  id="contact">

				    <div class="col-md-6 contact-grid wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">
					<h3 class="tittle wow bounceIn"  data-wow-duration=".8s" data-wow-delay=".2s">Contacto</h3>
						<div class="arrows-three"><img src="front/images/border.png" alt="border"></div>
							<p class="wel-text wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".4s">
Si deseas ser parte de esta lista de donantes, o tienes alguna duda de este proyecto por favor contactanos.
						    <form id="filldetails">
					  <div class="field name-box">
							<input type="text" id="name" placeholder="Who Are You?" required=""/>
							<label for="name">Nombre</label>
							<span class="ss-icon">check</span>
					  </div>
					  
					  <div class="field email-box">
							<input type="text" id="email" placeholder="example@email.com" required=""/>
							<label for="email">Email</label>
							<span class="ss-icon">check</span>
					  </div>
					  
					  <div class="field phonenum-box">
							<input type="text" id="email" placeholder="Phone Number" required=""/>
							<label for="email">Telefono</label>
							<span class="ss-icon">check</span>
					  </div>

					  <div class="field msg-box">
							<textarea id="msg" rows="4" placeholder="Your message goes here..." required=""/ ></textarea>
							<label for="msg">Mensaje</label>
							<span class="ss-icon">check</span>
					  </div>
						<div class="send wow shake"  data-wow-duration="1s" data-wow-delay=".3s">
											<input type="submit" value="Send" >
										</div>
					 
			  </form>

					   </div>
					<div class="col-md-6 contact-in wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">
						<h4 class="info">Muchas Gracias</h4>
						<p class="para1">
Agradecemos infitamente tu interes en nuestro pueblo, tu apoyo y tu amor por La Loma.					
						<div class="con-top two">
							<h4>Santa Maria La Loma, Mexico.</h4>
							<ul>
								
								<li>Ph: 630-123-1234 </li>
								<li><a href="mailto:lalomamex@gmail.com">lalomamex@gmail.com</a></li>
							</ul>								
						</div>
					</div>
								 </div>

						<div class="clearfix"> </div>
			      </div>
		   
	</div>


	    <hr class="featurette-divider">



<div class="row featurette">
    <div class="map wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".5s">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29989.75726171112!2d-100.0105555!3d20.0202774!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2fdbf97ac8b0d%3A0xc9ef7dfa8108aaf3!2sLa%20Loma%2C%20State%20of%20Mexico%2C%20Mexico!5e0!3m2!1sen!2sus!4v1605481669145!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>					</div>
				<!--//map-->
			 </div>
							</div>




    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

	    <hr class="featurette-divider">

  <!-- FOOTER -->
  
</main>

	<footer class="footer text-center">
						<div class="container">
							<!--logo2-->
								   <div class="loga2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
									  <a href="index.html"><h1>L<span>a Loma</span></h1></a>
									  <p>Mexico</p>
								   </div>
					<!--//logo2-->
					    <!-- <p class="float-end"><a href="#">Back to top</a></p> -->

								<a href="single.html" class="flag_tag2">Siguenos</a>
									<ul class="social wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">
										<li><a href="https://www.facebook.com/LaLomaMexico" class="btn btn-primary btn-xl"> Facebook</a></li>
										<li><a href="https://www.facebook.com/LaLomaMexico" class="btn btn-danger btn-xl"> instagram</a></li>
										 <div class="clearfix"></div>
									</ul>
									<p class="copy-right wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">
&copy; 2020 La Loma, Acambay, Estado de Mexico. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>										</p>

					 </div>
					 <script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
								<!--end-smooth-scrolling-->
		<a href="#home" id="toTop" class="scroll" style="display: block;"> 
			<span id="toTopHover" style="opacity: 1;"> </span></a>
	     </footer>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	

	
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!-- swipe box js -->
	<script src="front/js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
<!-- //swipe box js -->
<!--animate-->
<link href="front/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="front/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
      
  </body>
</html>
