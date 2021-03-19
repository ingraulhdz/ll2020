
 
                                


@extends('layouts.app')

@section('content')
	<div class="service" id="services">
		<div class="container">


				<div class="inst-grids">

	
					<div class="clearfix"> </div>		
				</div>

	
            


                                    <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                         <h4 class="tittle mb-4">Registrarse</h4>
			<div class="arrows-serve"><img src="front/images/border.png" alt="border"></div>
                                    </div>
                	<p class="wel-text wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".4s">
		Agradecemos infitamente tu interes, tu apoyo y tu amor por La Loma.</p>
        	<h4 class="info wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".4s">Muchas Gracias</h4>


            
            
     <form method="POST" action="{{ route('register') }}" class="user">
                        @csrf
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




                                    <div class="text-center">
                                          @if (Route::has('password.request'))
                                    <a class="small" href="{{ route('password.request') }}">
                         ¿Olvidast tu contraseña?</a>

                                @endif

                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{route('register')}}">Crear una cuenta</a>
                                    </div>
                                        <hr>
                                        <a href="#" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Iniciar con Google
                                        </a>
                                        <a href="#" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> iniciar con Facebook
                                        </a>
                                    </form>
                                   
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