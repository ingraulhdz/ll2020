


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
              <div class="col-lg-6 d-none d-lg-block bg-login-image">
                <img src="assets/img/logo-2.svg">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                   
                       <hr>
                       <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                  </div>
                  
                  <p class="wel-text wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".4s">
		Agradecemos infitamente tu interes, tu apoyo y tu amor por La Loma.</p>


            
            
     <form method="POST" action="{{ route('register') }}" class="user">
                        @csrf
                    <div class="form-group">
                        
                    <input type="text" id="exampleFirstName"
                                            placeholder="First Name" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        


  
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
           
                       <hr></hr>
                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" id="exampleFirstName"
                                            placeholder="First Name" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text"id="exampleInputEmail"
                                        placeholder="phone"  class="form-control form-control-user  @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                                         @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                                </div>
                                
                                <div class="form-group">
                                    <input type="text"id="exampleInputEmail"
                                        placeholder="Username"  class="form-control form-control-user  @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
                                         @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                                </div>

                                     <div class="form-group">
                                    <input type="email"id="exampleInputEmail"
                                        placeholder="Email Address"  class="form-control form-control-user  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" 
                                            id="exampleInputPassword" placeholder="Password" class="form-control form-control-user  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                                    <div class="col-sm-6">
                                        <input type="password"
                                            id="exampleRepeatPassword" placeholder="Repeat Password"  class="form-control form-control-user"  name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-user">
                                    Registrar
                                </button>
                                <a href="/" class="btn btn-danger btn-user"> Cancelar</a>
                                <hr>
                                <p class="text-center"> Registrarse con</p>
                                <div class="form-group row">
<div class="col-sm-4 mb-3 mb-sm-0">

                                        <a href="#" class="btn btn-primary ">
                                            <i class="fab fa-facebook-f fa-fw"></i>Facebook
                                        </a>
</div>

<div class="col-sm-4 mb-3 mb-sm-0">

                                        <a href="#" class="btn btn-danger ">
                                            <i class="fab fa-google fa-fw"></i> Google
                                        </a>
    </div>

  <div class="col-sm-4 mb-3 mb-sm-0">

                                        <a href="#" class="btn btn-dark">
                                            <i class="fab fa-apple-f fa-fw"></i> Apple
                                        </a>
    </div>


</div>

    

                                    </form>
                    
                    
                    </hr>






                    </div>



                
                  <hr>
                 
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</div>
  
</div>



@endsection                                    