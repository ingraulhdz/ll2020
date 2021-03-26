


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
                                         <h4 class="tittle mb-4">Iniciar Sesion</h>
			<div class="arrows-serve"><img src="front/images/border.png" alt="border"></div>
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
                                        </div>
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
                     <input class="custom-control-input" type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="custom-control-label" for="customCheck">Recordarme</label>
                                            </div>
                                        </div>
                                                    <button type="submit" class="btn btn-success btn-user ">
                                    {{ __('Entrar') }}
</button>

   <a href="/" class="btn btn-danger btn-user ">
                                    {{ __('Cancelar') }}
</a>
 <hr>
                                    <div class="text-center">
 @if (Route::has('password.request'))
                                    <a class="small" href="{{ route('password.request') }}">
                         ¿Olvidast tu contraseña?</a>

                                @endif                                    </div>
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