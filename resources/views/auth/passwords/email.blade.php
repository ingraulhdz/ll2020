
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
                                         <h4 class="tittle mb-4">Recuperar contraseña</h>
			<div class="arrows-serve"><img src="/front/images/border.png" alt="border"></div>
                                    </div>
                                    
  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" class="user">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-8">
                                 <input id="email" type="email" placeholder="Correo electronico"  aria-describedby="emailHelp"class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-user">
                                    {{ __('Recuperar') }}
                                </button>
                                  <a href='/' class="btn btn-danger btn-user">
                                    {{ __('Cancelar') }}
                                </a>
                            </div>
                               
                        </div>
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