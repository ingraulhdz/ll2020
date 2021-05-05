@extends('main')


@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
       
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                             <h6 class="h3 mb-0 font-weight-bold text-primary">{{__('Add Member')}}</h6>
          
<a href="{{route('members.index')}}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">{{__('Back')}}</span>
                    </a>

                 
                            </div>
                        </div>
    <div class="card-body">         


            <form action="{{route('members.store')}}" method="POST" class="user">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="form-group row">

                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" id="exampleFirstName"
                                            placeholder="First Name" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>

            
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" id="exampleFirstName"
                                            placeholder="Last Name" class="form-control form-control-user @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" >
                                                 @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>

                                    
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" id="exampleFirstName"
                                            placeholder="Nickname" class="form-control form-control-user @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}"  autocomplete="nickname" >
                                                 @error('nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    </div>



          <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" id="exampleFirstName"
                                            placeholder="E-mail" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" >
                                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>

            
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" id="exampleFirstName"
                                            placeholder="Phone" class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone" >
                                                 @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>




</div>
<div class="card-footer">         

            <button type="submit" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-save"></i>
                        </span>
                        <span class="text">Guardar</span>
                    </button>



            </form>

</div>
</div>
@stop

