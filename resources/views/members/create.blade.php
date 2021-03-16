@extends('main')


@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Agregar nuevo proyecto</h6>
    </div>
    <div class="card-body">         


            <form action="{{route('members.store')}}" method="POST" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <small for="inlineFormInputGroup">Nombre</small>
            <input type="text" class="form-control @if ($errors->any()) {{$errors->has('name') ? 'is-invalid':'is-valid'}} @endif" id="name" name="name" placeholder="Nombre" value="{{ old('name') }}" required="true">
              {!! $errors->first('name','<div class="invalid-feedback">:message        </div>') !!}

            <small for="inlineFormInputGroup">Apellido</small>
            <input type="text" class="form-control @if ($errors->any()) {{$errors->has('last_name') ? 'is-invalid':'is-valid'}} @endif" id="last_name" name="last_name" placeholder="Apellido " value="{{ old('last_name') }}" required="true">
            {!! $errors->first('last_name','<div class="invalid-feedback">:message        </div>') !!}

            <small for="inlineFormInputGroup">Telefono </small>
            <input type="text" class="form-control @if ($errors->any()) {{$errors->has('phone') ? 'is-invalid':'is-valid'}} @endif" id="phone" name="phone" placeholder="Telefono" value="{{ old('phone') }}" required="true">
            {!! $errors->first('phone','<div class="invalid-feedback">:message        </div>') !!}

            <small for="inlineFormInputGroup">Email </small>
            <input type="text" class="form-control @if ($errors->any()) {{$errors->has('email') ? 'is-invalid':'is-valid'}} @endif" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required="true">
            {!! $errors->first('email','<div class="invalid-feedback">:message        </div>') !!}

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

