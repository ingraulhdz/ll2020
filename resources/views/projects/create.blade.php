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


        <form action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data" class="user">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group row">

                                    <div class="col-sm-12 mb-3 mb-sm-2">
<input type="text" class="form-control-user form-control @if ($errors->any()) {{$errors->has('name') ? 'is-invalid':'is-valid'}} @endif" id="name" name="name" placeholder="Nombre" value="{{ old('name') }}" required="true">
  {!! $errors->first('name','<div class="invalid-feedback">:message        </div>') !!}
</div>
</div>
  

 <div class="form-group row">

                                    <div class="col-sm-12 mb-3 mb-sm-2"><textarea type="text" class="form-control form-control-user @if ($errors->any()) {{$errors->has('description') ? 'is-invalid':'is-valid'}} @endif" id="description" name="description" placeholder="Descripcion del proyeto " value="{{ old('description') }}" required="true">
</textarea> {!! $errors->first('description','<div class="invalid-feedback">:message        </div>') !!}
</div>
</div>



 <div class="form-group row">

                                    <div class="col-sm-4 mb-3 mb-sm-2">


 <small for="inlineFormInputGroup">Director </small>
 <select class="form-control" id="" name="director_id">
 <option value="" selected> Selecciona un Director </option>
  @foreach(App\Member::get() as $item)
<option value="{{$item->id}}">{{$item->name}} {{$item->lastname}} </optional>
@endforeach
</select>

 {!! $errors->first('planning','<div class="invalid-feedback">:message        </div>') !!}
</div>

    <div class="col-sm-4 mb-3 mb-sm-2">


 <small for="inlineFormInputGroup">Secretario </small>
 <select class="form-control" id="" name="secretary_id">
 <option value="" selected> Selecciona un Secretario </option>
  @foreach(App\Member::get() as $item)
<option value="{{$item->id}}">{{$item->name}} {{$item->lastname}} </optional>
@endforeach
</select>

 {!! $errors->first('planning','<div class="invalid-feedback">:message        </div>') !!}
</div>

    <div class="col-sm-4 mb-3 mb-sm-2">


 <small for="inlineFormInputGroup">Tesorero </small>
 <select class="form-control" id="" name="treasure_id">
 <option value="" selected> Selecciona un Tesorero </option>
  @foreach(App\Member::get() as $item)
<option value="{{$item->id}}">{{$item->name}} {{$item->lastname}} </optional>
@endforeach
</select>

 {!! $errors->first('planning','<div class="invalid-feedback">:message        </div>') !!}
</div>
</div>






 <div class="form-group row">

                                    <div class="col-sm-6 mb-3 mb-sm-2">


 <small for="inlineFormInputGroup">Archivo de Planeacion </small>
<input type="file" class="form-control  form-control-user @if ($errors->any()) {{$errors->has('planning') ? 'is-invalid':'is-valid'}} @endif" id="planning" name="planning" placeholder="Planeacion" value="{{ old('planning') }}" required="false">
 {!! $errors->first('planning','<div class="invalid-feedback">:message        </div>') !!}
</div>
              
</div>
</div>


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

