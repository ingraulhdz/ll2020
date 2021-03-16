@extends('main')


@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Editar {{$member->fullName()}}</h6>
    </div>
    <div class="card-body">  


<form action="{{route('members.update', $member)}}" method="POST" enctype="multipart/form-data">

<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="id" value="{{ $member->id }}">



<small > Foto </small>
   
   <input type="file" class="form-control @if ($errors->any()) {{$errors->has('image') ? 'is-invalid':'is-valid'}} @endif" id="image" name="image" placeholder="Fist photo" value="{{ $member->image}}" >
   {!! $errors->first('image','<div class="invalid-feedback">:message        </div>') !!}




   <small > Nombre</small>
   
   <input type="text" class="form-control @if ($errors->any()) {{$errors->has('name') ? 'is-invalid':'is-valid'}} @endif" id="name" name="name" placeholder="Fist Name" value="{{ $member->name}}" required="true">
   {!! $errors->first('name','<div class="invalid-feedback">:message        </div>') !!}

     
 
      <small for="inlineFormInputGroup"> Apellido</small>
  
        <input type="text" class="form-control @if ($errors->any()) {{$errors->has('last_name') ? 'is-invalid':'is-valid'}} @endif" id="last_name" name="last_name" placeholder="Short last_name" value="{{ $member->last_name}}" required="true">
                   {!! $errors->first('last_name','<div class="invalid-feedback">:message        </div>') !!}

                   <small for="inlineFormInputGroup">Telefono</small>
    
    <input type="text" class="form-control @if ($errors->any()) {{$errors->has('phone') ? 'is-invalid':'is-valid'}} @endif" id="phone" name="phone" placeholder="Supplie´s price" value="{{ $member->phone}}" required="true">
               {!! $errors->first('phone','<div class="invalid-feedback">:message        </div>') !!}

               <small for="inlineFormInputGroup">E-mail</small>
    <input type="text" class="form-control @if ($errors->any()) {{$errors->has('email') ? 'is-invalid':'is-valid'}} @endif" id="email" name="email" placeholder="Supplie´s price" value="{{ $member->email}}" required="true">
               {!! $errors->first('email','<div class="invalid-feedback">:message        </div>') !!}
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

