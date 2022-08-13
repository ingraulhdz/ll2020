<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>La Loma | Mexico </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
    @include('webpage.css')

</head>

<body>



  <!-- ======= Header ======= -->



  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html"><img src="assets/img/logo-2.svg" width="120px"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About </a></li>
          <li><a class="nav-link scrollto" href="#services">La Loma</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#proyectos">Projects</a></li>
          <li><a class="nav-link scrollto" href="#mensualidades">Join us</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>


          @if (Route::has('login'))
                                @auth
                                

                                    <li><a class="nav-link scrollto " href="{{ url('/home') }}">Dashboard</a></li>


                                @else
                                  
                                    <li><a class="nav-link scrollto " href="{{ route('login') }}">Log in</a></li>


                        @endauth
                        @endif







          <li><a class="nav-link scrollto " href="#">




          <form action="https://www.paypal.com/donate" method="post" target="_top">
      <input type="hidden" name="hosted_button_id" value="ZK6LQ6HWURELW" />
      <button class="btn btn-primary btn-md" type="submit"><i class="bi bi-heart-fill"></i> Donate </button>
    </form>


          </a></li>
          <li><a class="nav-link scrollto " href="/"><img src="assets/img/mexico.png" width="16px" height="16px"> ES</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->




    </div>
  </header>
 
  <!-- End Header -->

  <!-- ======= Carosel Section ======= -->
  
  <section id="hero" class="d-flex align-items-center">

<div class="container" data-aos="zoom-out" data-aos-delay="100">
  <div class="row">
    <div class="col-xl-6">
      <h1>Our Next Event </h1>
      <h2>July 3th, 2022</h2>
      <a href="#" class="btn-get-started scrollto">Read More</a>
    </div>
  </div>
</div>

</section>
  
  <!-- End Carosel -->

  <main id="main">

    <!-- ======= sponsor Section ======= -->

    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <h5> Thanks to our sponsors</h5>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->    <!-- ======= end sponsor Section ======= -->
    

    <!-- ======= About Section ======= -->


    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>Welcome</h3>
              <p>
              In 2020 a group of citizens from the region that currently reside in the United States created an organization (Not-for-profit) with the purpose of creating a better future and create history and growth for the community



              </p>
              <a href="fundation.html" class="about-btn"><span>Read more...</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">

              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Mission</h4>
                  <p>
                  Design and execute quality projects for the community (La Loma) this is all done by donation, fundraising events and monthly donations from its Citizen in Mexico and USA, this is all happening working together with our local government presenting  our projects and transparency to what’s being done.

                </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
<i class="bi bi-bullseye"></i>
                  <h4>Vision</h4>
                  <p>
                  We have a 10 year plan and with this we are looking to change the aspect of the community and quality of life for its residents, promoting different sources of work and investments to help improve the quality of life in the community without compromising the integrity of our town with an abundance of natural and cultural wealth.

                </p>
                </div>
<hr>

                
               
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section>





    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
   
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box border border-primary">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Members</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box border border-primary">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box border border-primary">
<i class="bi bi-heart-fill"></i>              <span data-purecounter-start="0" data-purecounter-end="541" data-purecounter-duration="1" class="purecounter"></span>
              <p>Donations</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box border border-primary">
<i class="bi bi-calendar2-event"></i>              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Events</p>
            </div>
          </div>

        </div>

        
      </div>


      <div class="row mt-4 ml-2 mr-2 col-lg-8 offset-lg-2 col-md-12">
        <h3> Our Fundation (spanish version)</h3>
          <iframe width="100%" class="mt-4 border border-primary p-1" height="315" src="https://www.youtube.com/embed/1zugrokOwwg" title="YouTube video player"
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
      </div>

    </section>
   
   
   
    <!-- End Counts Section -->


    <!-- ======= About Section ======= -->
   
    <section id="services" class="services section-bg ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>La Loma</h2>
          <p>
          Santa Maria La Loma, Mexico; the community is situated in the municipality of Acambay, in the State of Mexico.

            </p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
Pupulation              <p>
Our current population consist of 1188 habitants which reside in the community, a greater percentage of our Citizens migrate due to lack of opportunities.
</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
<i class="bi bi-geo"></i>
              <h4><a href="#">Location</a></h4>
              <p>
              Our community is located 27 km northwest of the municipal seat, 
              Acambay, bordering the states of Michoacan and Queretaro.
</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
<i class="bi bi-cloud-drizzle"></i>              <h4><a href="#">Weather</a></h4>
              <p>
              The weather/climate in general is semi-cold with a bit of humidity with with prolonged rains during the summer months
.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
<i class="bi bi-house"></i>              <h4><a href="#">Fundation</a></h4>
              <p>
              We believe our community was founded after the land division era during the mexican revolution between the years 1921 and 1925
</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
<i class="bi bi-person-dash-fill"></i>              <h4><a href="#">Emigration</a></h4>
              <p>The majority of our Citizens have migrated to the following cities withing our Country; Toluca, Mexico, Mexio City and Queretaro not to name other Surrounding towns!. In the United States our people have migrated to Chicago, IL, Bakersfield, Ca, Fort Wayne, IN, Madison, Wi and a few others
 </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
                <i class="bi bi-currency-dollar"></i>              <h4><a href="#">Ocupation</a></h4>
              <p>
              The main economic activity of the community is agriculture and livestock, corn growth and oats, vegetables which grow in greenhouses
 </p>
            </div>
          </div>
        </div>

  <div class="row justify-content-md-center">
  <div class="icon-box" data-aos="fade-up" data-aos-delay="700">
  <a href="laloma.html" class="btn btn-outline-primary justify-content-md-center"><span>Read more...</span></a>
  
  </div>
</div>



              

      </div>
    </section>

   
    <!-- End Services Section -->


    <!-- ======= LA galeria Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>The weather, the vegetation and our majestic green forest “Cerro de las palomas” surround our town with  beautiful views
</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todo</li>
              <li data-filter=".filter-app">Paisajes</li>
              <li data-filter=".filter-card">Proyectos</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    
    
    <!-- End la galeria Section -->

    <!-- ======= Projects Section ======= -->
    
    <section id="proyectos" class="tabs">
      <div class="section-title">
        <h2>Projects</h2>
        <p>See Our projects </p>
      </div>
      <div class="container" data-aos="fade-up">
        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">Rodeo</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">Middle School</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">Solar Lighthing</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">Downtown</h4>
            </a>
          </li>
        </ul>
    
        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <h3>Lienzo charro</h3>
                <p class="fst-italic">
                 Over 1.5 Millions of Mexicans Pesos Invested (750,000 USD aprox)
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i>Only community with our own charro canvas/li>
                  <li><i class="ri-check-double-line"></i> Charreria and Jaripeo events</li>
                  <li><i class="ri-check-double-line"></i> Lienzo Charro with official measurements</li>
               
                </ul>
                <p>
                Through the group of horseback riding of La Loma
Donations were made, events and raffles to collect the necessary resources and start the 
construction and foundation of our own Lienzo Charro. 

                </p>
                <p>
<a href="#" class="btn btn-outline-primary"><span>Read more... </span> <i class="bx bx-chevron-right"></i></a>

                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center " data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid border border-primary">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Middle Schoo “Nicolas Bravo”</h3>
                <p>We remodeled the exterior of such which included.
                </p>
              
                <ul>
                        <li><i class="ri-check-double-line"></i>New windows

</li>
                        <li><i class="ri-check-double-line"></i> New sidewalks and bushes
</li>
<li><i class="ri-check-double-line"></i> New paint
</li> 
 <li><i class="ri-check-double-line"></i> 
Interior green areas</li>
                </ul>
                <p>About project
                </p>
                <a href="#" class="btn btn-outline-primary"><span>Read more... </span> <i class="bx bx-chevron-right"></i></a>

              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/tabs-2.jpg" alt="" class="img-fluid border border-primary">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Solar iluminations</h3>
              <p>Our streets are illuminated with solar lamps
              </p>
              
              <ul>
                <li><i class="ri-check-double-line"></i> We have installed 20+ solar lamps in the city center</li>
                <li><i class="ri-check-double-line"></i> We have installed solar lamps on streets where the residents/neighbors have donated those </li>
                <li><i class="ri-check-double-line"></i> The street lamps helps to illuminate our streets even if our electric power goes off or malfunctions our streets continue to be illuminated.</li>
              </ul>
            
              <a href="#" class="btn btn-outline-primary"><span>Leer mas </span> <i class="bx bx-chevron-right"></i></a>

              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/tabs-3.jpg" alt="" class="img-fluid border border-primary">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Center Remodeling in progress</h3>
                <p>We have been constant on the maintenance and remodeling work on the city center
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> We have remodeled green areas</li>
                  <li><i class="ri-check-double-line"></i> We have rehabilitated all the green areas</li>
                  <li><i class="ri-check-double-line"></i> We have build sidewalks, speed bumps to ensure the pedestrians are safe.</li>
                </ul>
                <p>About project
                </p>
                <a href="#" class="btn btn-outline-primary"><span>Read more... </span> <i class="bx bx-chevron-right"></i></a>

              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/tabs-4.jpg" alt="" class="img-fluid border border-primary">
              </div>
            </div>
          </div>
        </div>
    
      </div>
    </section>    
    <!-- End Tabs Section -->

    <!-- ======= Testimonials Section ======= -->

    
    
    <!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    
    <section id="mensualidades" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Mensualidades</h2>
          <p>Los proyectos  son  realizados en un 100% con donaciones, Unete a esta gran lista de gente que apoya el proyecto La Loma Transformacion</p>
        </div>
<h3>Planes sugeridos</h3>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="fade-up" data-aos-delay="100">
              <h3>JR</h3>
              <h4><sup>$</sup>10<span> / month</span></h4>
              <p>
              Creado para  personas  que sus ingresos por el momento no son muy altos.
              </p>
              <div class="btn-wrap">
                  <button class="btn btn-outline-primary">Unirse Ahora </button>
              </div>

              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="fade-up" data-aos-delay="200">
              <h3>SR</h3>
              <h4><sup>$</sup>50<span> / month</span></h4>
              <p>Diseñado para personas  que cuentan con un estilo de vida mas estable que  no afecta sus gastos.  
              </p>
              <div class="btn-wrap">
                  <button class="btn btn-outline-light">Unirse Ahora</button>
              </div>




            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="300">
              <h3>BUSSINESS</h3>
              <h4><sup>$</sup>100<span> / month</span></h4>
              <p>Para aquellos dueños de negocio las donaciones se realizan directamente entre el
                negocio y la fundacion.</p>
              <div class="btn-wrap">
                  <button class="btn btn-outline-primary">Unirse Ahora</button>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="fade-up" data-aos-delay="300">
              <h3>PERSONALISADO</h3>
              <h4> <span>  Mensualidad personalisada</span></h4>
                  <p>Puedes crear tu plan de mensualidades ingresando la cantidad que tu puedas donar mensualemnte </p>


              <div class="btn-wrap">
                <form action="https://www.paypal.com/donate" method="post" target="_top">
                  <input type="hidden" name="hosted_button_id" value="6F5ZGS37WK9F4" />
                  <button class="btn btn-outline-light">Crear Plan </button>
                </form>

              </div>
            </div>
          </div>
          
          </div>

      </div>
    </section>
    
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
   
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Q & A</h2>
        </div>

        <ul class="faq-list accordion" data-aos="fade-up">

          <li>
            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Is it Safe? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
               To avoid fraud and misuse of your information, payments are made using the API of PayPal which provides the necessary security to carry out transactions              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Can I Cancel anytime? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
              It would be very sad if you canceled, but if you can cancel at any time if you wish we hope you don’t this is for all of us and our future generations              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">
            How do I know how the money it’s been invested? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
              To generate trust and transparency the Foundation invested in a web system to which you will have access once you are registered you will be provided with a username and password, with this you can monitor all the projects made, progress that is made and where the money is invested              </p>

              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Can my donations be deducted at the time of filing tax returns? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>You will be sent a receipt of your monthly contribution and your annual contributions in the name of the foundation, with this your accountant can help you deduct from your annual taxes.
</p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Can I change the amount of my contributions? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
Can I change the amount of my contributions?
Yes, you can either contribute more or less anytime no matter what the amount is
              </p>
            </div>
          </li>

         

        </ul>

      </div>
    </section>
   
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Team Section ======= -->
    
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>REPRESENTATIVES</h2>
          <p>
          





The foundation is represented mainly by the next committee, the committee will change every 3 years if most wish to.          </p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Pablo Alcantara </h4>
                <span>President and founder</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Elias Quintana</h4>
                <span>Secretary</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ismael Torrijos</h4>
                <span>Treasurer</span>
              </div>
            </div>
          </div>

         

        </div>

      </div>
    </section>
    
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
   
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>CONTACT</h2>
          <p>
We appreciate your interest in our people, our town, your support and your love for The Community (La Loma) you can always contact us if you have any question, suggestions or ideas.          </p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Address</h3>
                  <p>1261 Adler LN, Carol Stream, Illinois 60188</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>lalomatransformacion@gmail.com<br>info@lalomamexico.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Phone</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>
<div class="map wow fadeInDown m-5" data-wow-duration=".8s" data-wow-delay=".5s">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29989.
    !2d-100.0105555!3d20.0202774!3m2!1i1024!2i768!4f13.1!3m3!1m2!
    %3A0xc9ef7dfa8108aaf3!2sLa%20Loma%2C%20State%20of%20Mexico%2C%20Mexico!5e0!3m2!1sen!2sus!4v1605481669145!5m2!1sen!2sus"
    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
    tabindex="0"></iframe>
</div>
      </div>
    </section>
   
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>La Loma Mexico 2020-30 NFP<span>.</span></h3>
        <p>
          1261 Adler LN,<br> Carol Stream, <br>Illinois <br> Estados Unidos 60188 <br>
     
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> lalomatransformacion@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
     <img src="assets/img/logo.png" width="100PX">
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Information</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Fundacion La Loma Mexico NFP</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Santa Maria La Loma, Mexico</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Acambay, Mexico</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
    
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join  our newsletter</h4>
        <p>Recive in your mail monthly reports of whats is being done in La Loma</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>La Loma Mexico</span></strong>. All Rights Reserveds
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
      Designed by <a href="https://ber-it.com/">Ber-it</a>
    </div>
  </div>
  <div class="social-links text-center text-md-end pt-3 pt-md-0">
Social Network    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-whatsapp"></i></a>

  </div>
</div>
</footer>
  
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
                          @include('webpage.js')








</body>

</html>