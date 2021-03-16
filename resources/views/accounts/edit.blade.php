@extends('main')


@section('content')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$account->owner}}</h6>
    </div>
    <div class="card-body">         




<form action="{{route('accounts.update', $account)}}" method="POST" >

<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="id" value="{{ $account->id }}">


<small for="inlineFormInputGroup">Propietario</small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('owner') ? 'is-invalid':'is-valid'}} @endif" id="owner" name="owner" placeholder="Owner" value="{{ $account->owner }}" required="true">
  {!! $errors->first('owner','<div class="invalid-feedback">:message        </div>') !!}


  <small for="inlineFormInputGroup">Banco</small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('bank') ? 'is-invalid':'is-valid'}} @endif" id="bank" name="bank" placeholder="Bank" value="{{ $account->bank }}" required="true">
  {!! $errors->first('bank','<div class="invalid-feedback">:message        </div>') !!}

  <small for="inlineFormInputGroup">Tarjeta </small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('card') ? 'is-invalid':'is-valid'}} @endif" id="card" name="card" placeholder="Card" value="{{ $account->card }}" required="true">
 {!! $errors->first('card','<div class="invalid-feedback">:message        </div>') !!}



 <small for="inlineFormInputGroup">Numero de cuenta </small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('account_number') ? 'is-invalid':'is-valid'}} @endif" id="account_number" name="account_number" placeholder="Account Number" value="{{ $account->account_number}}" required="true">
 {!! $errors->first('account_number','<div class="invalid-feedback">:message        </div>') !!}



 <small for="inlineFormInputGroup">Numero de Ruta </small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('route_number') ? 'is-invalid':'is-valid'}} @endif" id="route_number" name="route_number" placeholder="Routing Number" value="{{ $account->route_number }}" required="true">
 {!! $errors->first('route_number','<div class="invalid-feedback">:message        </div>') !!}


 <small for="inlineFormInputGroup">Pais </small>

 <select class="form-control @if ($errors->any()) {{$errors->has('rol_id') ? 'is-invalid':'is-valid'}} @endif" id="country" name="country"  value="{{ $account->country }}" >
 <option value=""> Selecciona un pais</option>
 <option value="MEXICO" @if($account->country == 'MEXICO') selected @endif> Mexico</option>
 <option value="USA" @if($account->country == 'USA') selected @endif> USA</option>
</select>
<br>

    
<hr>

    
<button type="submit" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-edit"></i>
                        </span>
                        <span class="text">Actualizar</span>
                    </button>
</form>

</div>
</div>

@stop

