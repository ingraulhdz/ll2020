@extends('webpage.main')

@section('content')


  <!-- ======= Header ======= -->
  @include('webpage.header')

 
  <!-- End Header -->

  <main id="main">
  @include('webpage.acerca')

  </main><!-- End #main -->

  

  
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
                          @include('webpage.js')



@endsection
