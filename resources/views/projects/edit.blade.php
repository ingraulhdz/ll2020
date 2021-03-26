@extends('main')


@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$project->name}}</h6>
    </div>
    <div class="card-body">         




<form action="{{route('projects.update', $project)}}" method="POST" enctype="multipart/form-data" >

<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="id" value="{{ $project->id }}">




      <small > Nombre</small>
   
        <input type="text" class="form-control @if ($errors->any()) {{$errors->has('name') ? 'is-invalid':'is-valid'}} @endif" id="name" name="name" placeholder="Nombre del proyecto" value="{{ $project->name}}" required="true">
        {!! $errors->first('name','<div class="invalid-feedback">:message        </div>') !!}

     
 
      <small for="inlineFormInputGroup"> Descripcion </small>
  
        <textarea  type="text" class="form-control @if ($errors->any()) {{$errors->has('description') ? 'is-invalid':'is-valid'}} @endif" id="description" name="description" placeholder="Descripcion general del proyecto" value="{{ $project->description}}" required="true">
</textarea >
                   {!! $errors->first('description','<div class="invalid-feedback">:message        </div>') !!}

                   <small > Avance</small>
   
   <input type="number" class="form-control @if ($errors->any()) {{$errors->has('advance') ? 'is-invalid':'is-valid'}} @endif" id="advance" name="advance" placeholder="Avance en % del proyecto" value="{{ $project->advance}}" required="true">
   {!! $errors->first('advance','<div class="invalid-feedback">:message        </div>') !!}


                   <small for="inlineFormInputGroup">Director del proyecto </small>
    
                   <select class="form-control @if ($errors->any()) {{$errors->has('director_id') ? 'is-invalid':'is-valid'}} @endif" id="director_id" name="director_id"  value="{{ $project->director_id }}" >
                        <option value=""  >Seleciona un director</option>

 @foreach(App\Member::get() as $item)
        <option value="{{$item->id}}" @if($item->id == $project->director_id) selected @endif>{{ $item->fullName() }}</option>
        @endforeach
          </select>
          <small for="inlineFormInputGroup"> Secretario</small>

          <select class="form-control @if ($errors->any()) {{$errors->has('secretary_id') ? 'is-invalid':'is-valid'}} @endif" id="secretary_id" name="secretary_id"  value="{{ $project->secretary_id }}" >
                        <option value=""  >Select a secretary</option>

 @foreach(App\Member::get() as $item)
        <option value="{{$item->id}}" @if($item->id == $project->secretary_id) selected @endif>{{ $item->fullName() }}</option>
        @endforeach
          </select>
          <small for="inlineFormInputGroup"> Tesorero</small>

          <select class="form-control @if ($errors->any()) {{$errors->has('treasure_id') ? 'is-invalid':'is-valid'}} @endif" id="treasure_id" name="treasure_id"  value="{{ $project->treasure_id }}" >
                        <option value=""  >Selecciona un miembro a Secretario</option>

 @foreach(App\Member::get() as $item)
        <option value="{{$item->id}}" @if($item->id == $project->treasure_id) selected @endif >{{ $item->fullName() }}</option>
        @endforeach
          </select>

<small>Cuenta Bancaria</small>
  
<select class="form-control @if ($errors->any()) {{$errors->has('account_id') ? 'is-invalid':'is-valid'}} @endif" id="account_id" name="account_id"  value="{{ $project->account_id }}" >
                        <option value=""  >Seleciona una cuenta para deposito</option>

                        @foreach(App\Models\Account::get() as $item)

<option value="{{$item->id}}" @if($item->id == $project->account_id ) selected  @endif >
<small>{{ $item->owner }} | {{ $item->bank }} </small></option>

@endforeach
      
          </select>

 
          <small for="inlineFormInputGroup">Foto de Portada </small>
<input type="file" class="form-control @if ($errors->any()) {{$errors->has('photo') ? 'is-invalid':'is-valid'}} @endif" id="photo" name="photo" placeholder="photo" value="{{ old('photo') }}" >
 {!! $errors->first('photo','<div class="invalid-feedback">:message        </div>') !!}



          <small for="inlineFormInputGroup">Planeacion </small>
<input type="file" class="form-control @if ($errors->any()) {{$errors->has('planning') ? 'is-invalid':'is-valid'}} @endif" id="planning" name="planning" placeholder="Telefono" value="{{ old('planning') }}" >
 {!! $errors->first('planning','<div class="invalid-feedback">:message        </div>') !!}




    
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

