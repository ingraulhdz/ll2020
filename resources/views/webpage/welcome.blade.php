@extends('webpage.main')

@section('content')


  <!-- ======= Header ======= -->
  @include('webpage.header')

 
  <!-- End Header -->

  <!-- ======= Carosel Section ======= -->
  
  @include('webpage.carousel')

  
  <!-- End Carosel -->

  <main id="main">

    <!-- ======= sponsor Section ======= -->

    @include('webpage.sponsors')
    <!-- ======= end sponsor Section ======= -->
    

    <!-- ======= About Section ======= -->

    @include('webpage.acerca')

    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
   
       @include('webpage.counter')

   
   
   
    <!-- End Counts Section -->


    <!-- ======= About Section ======= -->
   
          @include('webpage.about')

   
    <!-- End Services Section -->


    <!-- ======= LA galeria Section ======= -->
              @include('webpage.galeria')

    
    
    <!-- End la galeria Section -->

    <!-- ======= Projects Section ======= -->
    
    @include('webpage.projects')
    
    <!-- End Tabs Section -->

    <!-- ======= Testimonials Section ======= -->
        @include('webpage.testimonios')

    
    
    <!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    
            @include('webpage.suscription')

    
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
   
               @include('webpage.faqs')

   
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Team Section ======= -->
    
                   @include('webpage.team')

    
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
   
                      @include('webpage.contacto')

   
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
                        @include('webpage.footer')

  
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
                          @include('webpage.js')



@endsection
