@extends('main')


@section('content')




<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Agregar nueva cuenta</h6>
    </div>
    <div class="card-body">         



    <form action="{{route('accounts.store')}}" method="POST" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<small for="inlineFormInputGroup">Propietario</small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('owner') ? 'is-invalid':'is-valid'}} @endif" id="owner" name="owner" placeholder="Propietario de la cuenta" value="{{ old('owner') }}" required="true">
  {!! $errors->first('owner','<div class="invalid-feedback">:message        </div>') !!}


  <small for="inlineFormInputGroup">Banco</small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('bank') ? 'is-invalid':'is-valid'}} @endif" id="bank" name="bank" placeholder="Nombre del banco" value="{{ old('bank') }}" required="true">
  {!! $errors->first('bank','<div class="invalid-feedback">:message        </div>') !!}

  <small for="inlineFormInputGroup">Numero de tarjeta </small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('card') ? 'is-invalid':'is-valid'}} @endif" id="card" name="card" placeholder="Numero de la tarjeta" value="{{ old('card') }}" required="true">
 {!! $errors->first('card','<div class="invalid-feedback">:message        </div>') !!}



 <small for="inlineFormInputGroup">Numero de cuenta </small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('account_number') ? 'is-invalid':'is-valid'}} @endif" id="account_number" name="account_number" placeholder="Numero de Cuenta" value="{{ old('account_number') }}" required="true">
 {!! $errors->first('account_number','<div class="invalid-feedback">:message        </div>') !!}



 <small for="inlineFormInputGroup">Numero de ruta </small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('route_number') ? 'is-invalid':'is-valid'}} @endif" id="route_number" name="route_number" placeholder="Numero de Ruta" value="{{ old('route_number') }}" required="true">
 {!! $errors->first('route_number','<div class="invalid-feedback">:message        </div>') !!}

 <small for="inlineFormInputGroup">Pais </small>

 <select id="country" name="country" class="form-control @if ($errors->any()) {{$errors->has('country') ? 'is-invalid':'is-valid'}} @endif">
 <option value="MEXICO"> Mexico</option>
 <option value="USA"> USA</option>
</select>
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

