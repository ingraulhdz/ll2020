


@extends('webpage.main')

@section('content')
		

<div class="bg-primary">

  <!-- ======= Header ======= -->
  

<div class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image mt-5">
                <img src="assets/img/logo-2.svg">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                  </div>
                  <form method="POST" action="{{ route('login') }}" class="user">
                        @csrf 
                    <div class="form-group">
                        
                        <input id="username" type="text" placeholder="User name or Email"  aria-describedby="emailHelp"class="form-control form-control-user @error('email') is-invalid @enderror @error('username') is-invalid @enderror" name="login" value="{{ old('username') ?: old('email') }}" required autocomplete="username" autofocus>



  
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
           
                       





                    </div><br>
                    <div class="form-group">
                    <input id="password" placeholder="Password" type="password" class="form-control l form-control-user @error('email') is-invalid @enderror  @error('usernmae') is-invalid @enderror " name="password" required autocomplete="current-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>
                      </div>
                    </div><br>
                    <div class="form-group row">
                      <div class="col-sm-4 mb-3 mb-sm-0">
                       <button type="submit" class="btn btn-success ">Login</button>
                      </div>
              <div class="col-sm-4 mb-3 mb-sm-0">

                      <a href="/" class="btn btn-danger ">
                        Cancelar
                      </a></div>
<div class="col-sm-4 mb-3 mb-sm-0">

                      <a href="{{route('register')}}" class="btn btn-primary ">
                        Registrarse
                      </a></div>
                  </div>


              



                    <hr>
                    <div class="row">
                    <a href="index.html" class="btn btn-danger btn-user btn-block">
                      <i class="bi bi-google"></i> Login with Google
                    </a><br><br>
                    <a href="index.html" class="btn btn-primary btn-user btn-block mt-2">
                    <i class="bi bi-facebook"></i> Login with Facebook
                    </a>
                    <br><br>
                    <a href="index.html" class="btn btn-dark btn-user btn-block mt-2">
                    <i class="bi bi-apple"></i> Login with Apple
                    </a></div>
                  </form>
                  <hr>
                  <div class="text-center">
                
                    @if (Route::has('password.request')) 
                       <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
  @endif 


                  </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</div>



@endsection                                    