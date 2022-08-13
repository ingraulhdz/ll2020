@extends('webpage.main')
@section('css')
<link href="/backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endsection
@section('content')


  <!-- ======= Header ======= -->
  @include('webpage.header')

 
  <!-- End Header -->

  <!-- ======= Carosel Section ======= -->
  
  <section id="hero" class="d-flex align-items-center">

<div class="container" data-aos="zoom-out" data-aos-delay="100">
  <div class="row">
    <div class="col-xl-6">
      <h1>Rifa Iphone 13 Pro MAx</h1>
      <h2>Fecha Rifa : Junio 25 20:00 Hrs</h2>
      <a href="#about" class="btn-get-started scrollto">Saber mas...</a>
    </div>
  </div>
</div>

</section>
  
  <!-- End Carosel -->

  <main id="main">

    <!-- ======= sponsor Section ======= -->

    @include('webpage.sponsors')
    <!-- ======= end sponsor Section ======= -->
    


   
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box border border-primary">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Vendidos </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box border border-primary">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p>Meta </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box border border-primary">
<i class="bi bi-heart-fill"></i>              <span data-purecounter-start="0" data-purecounter-end="541" data-purecounter-duration="1" class="purecounter"></span>
              <p>Restantes </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box border border-primary">
<i class="bi bi-calendar2-event"></i>              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Porcentaje</p>
            </div>
          </div>

        </div>

        
      </div>


      

    </section>
   

<!--  -->

<section id="contact" class="contact">
      <div class="container bg-primary" data-aos="fade-up">

        <div class="section-title">
          <h2>Rifa Iphone 13 pro max</h2>
          <p>Rifa a beneficio de La Loma Tickets $25 dolares o $500 Pesos 
USA Zelle: lalomaTransformacion 
MEXICO: Bancomer Abel Hernandez Cuenta #

</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
        <form method="POST" action="{{ route('login') }}" class="user">
                        @csrf 
                    <div class="form-group">
                        
   <input id="username" type="text" placeholder="Nombre"  
   aria-describedby="emailHelp"
   class="form-control form-control-user @error('email') is-invalid @enderror @error('username') is-invalid @enderror" 
   name="login" value="{{ old('username') ?: old('email') }}" required autocomplete="username" autofocus>



  
  @error('username')
 <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
  @error('email')
 <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
           

                    </div>
                    
                    
                    <br>
                    <div class="form-group">
                    <input id="password" placeholder="Numero Ticket 1-210"
                     type="number" class="form-control l form-control-user @error('email') is-invalid @enderror  @error('usernmae') is-invalid @enderror " 
                     name="password" required autocomplete="current-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                    </div>
      
<br>
                    <div class="form-group">
                    <input id="password" placeholder="Telefono"
                     type="number" 
                     class="form-control l form-control-user @error('email') is-invalid @enderror  @error('usernmae') is-invalid @enderror " 
                     name="password" required autocomplete="current-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                    </div>
      



               

              
                    <div class="form-group row">
                      <div class="col-sm-10 mb-2 mb-sm-0">
                       <button type="submit" class="btn btn-success ">Guardar</button>
                      </div>
  
                  </div>



            
                  </form>

</div>

</div>
</section>



</hr>


<!-- table -->

<div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>boleto</th>
                      <th>Pagado</th>
                 
                    </tr>
                  </thead>
                 
                  <tbody>

                      
                      <tr><td>rau</td><td>25</td><td>OK</td>
                      <tr><td>JOR</td><td>65</td><td>no</td>
         </tr>
                                 
                                    
                                    </tbody>
                                </table>
                            </div>
                            <script src="/js/vendor/jquery/jquery.min.js"></script>

                            <script src="/backend/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script src="/backend/js/demo/tableDonations.js"></script>
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
