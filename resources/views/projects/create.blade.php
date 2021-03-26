@extends('main')


@section('content')


<!-- Project Card Example -->

<div class="card shadow mb-4">
   <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                             <h6 class="h3 mb-0 font-weight-bold text-primary">{{__('Projects')}}</h6>
          
<a href="{{route('projects.index')}}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">{{__('Back')}}</span>
                    </a>

                 
                            </div>
                        </div>
    <div class="card-body">         


        <form action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<small for="inlineFormInputGroup">Nombre</small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('name') ? 'is-invalid':'is-valid'}} @endif" id="name" name="name" placeholder="Nombre" value="{{ old('name') }}" required="true">
  {!! $errors->first('name','<div class="invalid-feedback">:message        </div>') !!}

  

 <small for="inlineFormInputGroup">Descripcion</small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('description') ? 'is-invalid':'is-valid'}} @endif" id="description" name="description" placeholder="Descripcion del proyeto " value="{{ old('description') }}" required="true">
{!! $errors->first('description','<div class="invalid-feedback">:message        </div>') !!}

<small for="inlineFormInputGroup">Cotizacion </small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('cost') ? 'is-invalid':'is-valid'}} @endif" id="cost" name="cost" placeholder="Cotizacion del proyecto (si existe)" value="{{ old('cost') }}" >
 {!! $errors->first('cost','<div class="invalid-feedback">:message        </div>') !!}


 <small for="inlineFormInputGroup">Planeacion </small>
<input type="file" class="form-control @if ($errors->any()) {{$errors->has('planning') ? 'is-invalid':'is-valid'}} @endif" id="planning" name="planning" placeholder="Planeacion" value="{{ old('planning') }}" required="false">
 {!! $errors->first('planning','<div class="invalid-feedback">:message        </div>') !!}


 <div class="card-footer">         

 <button type="submit" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-save"></i>
                                        </span>
                                        <span class="text">Guardar</span>
</button>

</form>


</div>
</div>

        <!-- Color System  <div class="row">
    <div class="col-lg-6 mb-4"> -->


</div>







@stop

