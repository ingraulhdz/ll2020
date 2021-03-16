@extends('main')


@section('content')




<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Agregar nuevo proyecto</h6>
    </div>
    <div class="card-body">         

    <form action="{{route('tickets.store')}}" method="POST" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">


<!-- <select id="claimant_id" name="claimant_id" >
                        <option value=""  >Selecciona un Donador</option>

 @foreach(App\ticket::get() as $item)
        <option value="{{$item->id}}">{{ $item->name }}</option>
        @endforeach
          </select> -->
          <small for="inlineFormInputGroup">Modulo</small>

          <select id="module" name="module" class="form-control @if ($errors->any()) {{$errors->has('module') ? 'is-invalid':'is-valid'}} @endif" >
                        <option value=""  >Modulo del Prolema</option>

                        <option value="Miembros">Miembros</option>
                        <option value="Donaciones">Donaciones</option>
                        <option value="Proyectos">Proyectos</option>
                        <option value="Inversiones">Inversiones</option>
                        <option value="Cuentas">Cuentas</option>
                        <option value="Otro">Otro</option>
          </select>
          
          <small for="inlineFormInputGroup">Especificacion</small>

          <select id="specification" name="specification" class="form-control @if ($errors->any()) {{$errors->has('specification') ? 'is-invalid':'is-valid'}} @endif">
                        <option value=""  >Especificacion del Problema</option>

                        <option value="Crear">Crear</option>
                        <option value="Editar">Editar</option>
                        <option value="Cargar Archivo">Cargar Archivo</option>
                        <option value="Eliminar">Eliminar</option>
                        <option value="Otro">Otro</option>
          </select>
 

          <small for="inlineFormInputGroup">Descripcion</small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('description') ? 'is-invalid':'is-valid'}} @endif" id="description" name="description" placeholder="Breve descripcion " value="{{ old('description') }}" required="true">
{!! $errors->first('description','<div class="invalid-feedback">:message        </div>') !!}

 

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

