
@extends('main')


@section('content')




<div class="card shadow mb-4">
    
                         <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h6 class="h3 mb-0 font-weight-bold text-primary">{{__('Add new User')}}</h6>
                              
<a href="{{route('users.index')}}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">{{__('Back')}}</span>
                    </a>
                    
                                                </div>
                        </div>
                        
    <div class="card-body">         

    <form action="{{route('users.store')}}" method="POST" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">




<div class="form-group">
 <small for="inlineFormInputGroup"> {{__('Name')}}</small>

<input type="text" class="form-control @if ($errors->any()) {{$errors->has('name') ? 'is-invalid':'is-valid'}} @endif" id="name" name="name" placeholder="{{__('Full Name')}}" value="{{ old('name') }}" required="true">
    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


<div class="form-group">
 <small for="inlineFormInputGroup"> {{__('Username')}}</small>

<input type="text" class="form-control @if ($errors->any()) {{$errors->has('username') ? 'is-invalid':'is-valid'}} @endif" id="username" name="username" placeholder="{{__('username')}}" value="{{ old('username') }}" required="true">
    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


	<div class="form-group">
 <small for="inlineFormInputGroup"> {{__('E-mail')}}</small>
 <input type="text" class="form-control @if ($errors->any()) {{$errors->has('email') ? 'is-invalid':'is-valid'}} @endif" id="email" name="email" placeholder="example@mail.com" value="{{ old('email') }}" required="true">
    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror



<div class="form-group">
<small for="inlineFormInputGroup"> {{__('Password')}}</small>

                                <input placeholder="{{__('password')}}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                        <small for="inlineFormInputGroup"> {{__('Confirm Password')}}</small>

                                <input placeholder="{{__('Confirm password')}}" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <button type="submit" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Guardar</span>
</button>

                    </form>


</div>
</div>

@stop

