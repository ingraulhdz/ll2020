@extends('main')


@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> #{{$ticket->id}}</h6>
    </div>
    <div class="card-body">         




<form action="{{route('tickets.update', $ticket)}}" method="POST" >

<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="id" value="{{ $ticket->id }}">


 
<!-- <select id="claimant_id" name="claimant_id" >
                        <option value=""  >Selecciona un Donador</option>

 @foreach(App\ticket::get() as $item)
        <option value="{{$item->id}}">{{ $item->name }}</option>
        @endforeach
          </select> -->
 
        

          <small for="inlineFormInputGroup"> Modulo</small>

          <select class="form-control @if ($errors->any()) {{$errors->has('module') ? 'is-invalid':'is-valid'}} @endif" id="module" name="module"  value="{{ $ticket->module }}" >
          <option value="Miembros" @if($ticket->module =='Miembros') selected @endif>Miembros</option>
                        <option value="Donaciones" @if($ticket->module =='Donaciones') selected @endif>Donaciones</option>
                        <option value="Proyectos" @if($ticket->module =='Proyectos') selected @endif>Proyectos</option>
                        <option value="Inversiones" @if($ticket->module =='Inversiones') selected @endif>Inversiones</option>
                        <option value="Cuentas" @if($ticket->module =='Miembros') selected @endif>Cuentas</option>
                        <option value="Otro">Otro</option>

          </select>
          
          <small for="inlineFormInputGroup"> Especificacion del problema</small>

          <select class="form-control @if ($errors->any()) {{$errors->has('specification') ? 'is-invalid':'is-valid'}} @endif" id="specification" name="specification"  value="{{ $ticket->specification }}" >

<option value="Crear" @if($ticket->specification == 'Crear' ) selected @endif >Crear</option>
<option value="Editar" @if($ticket->specification == 'Editar' ) selected @endif >Editar</option>
<option value="Cargar archivo" @if($ticket->specification == 'Cargar archivo' ) selected @endif >Cargar Archivo</option>
<option value="Eliminar" @if($ticket->specification == 'Eliminar' ) selected @endif >Eliminar</option>
<option value="Otro" @if($ticket->specification == 'Otro' ) selected @endif >Otro</option>

          </select>
 


          <small for="inlineFormInputGroup">Description</small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('description') ? 'is-invalid':'is-valid'}} @endif" id="description" name="description" placeholder="Short " value="{{ $ticket->description}}" required="true">
{!! $errors->first('description','<div class="invalid-feedback">:message        </div>') !!}

    
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

