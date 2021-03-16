@extends('main')


@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$investment->name}}</h6>
    </div>
    <div class="card-body">         



<form action="{{route('investments.update', $investment)}}" method="POST" >

<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="id" value="{{ $investment->id }}">

<select class="form-control @if ($errors->any()) {{$errors->has('rol_id') ? 'is-invalid':'is-valid'}} @endif" id="project_id" name="project_id"  value="{{ $investment->project_id }}" >
           <option value="">Selecciona Proyecto</option>
       @foreach(App\Project::get() as $project) 
         <option value='{{ $project->id }}' @if($project->id == $investment->project_id ) selected  @endif >{{ $project->name }}</option>
        @endforeach
        </select>

        <small for="inlineFormInputGroup"> name</small>
  
  <input type="text" class="form-control @if ($errors->any()) {{$errors->has('name') ? 'is-invalid':'is-valid'}} @endif" id="name" name="name" placeholder="Short description" value="{{ $investment->name}}" required="true">
             {!! $errors->first('name','<div class="invalid-feedback">:message        </div>') !!}

    
        <small for="inlineFormInputGroup"> description</small>
  
  <input type="text" class="form-control @if ($errors->any()) {{$errors->has('description') ? 'is-invalid':'is-valid'}} @endif" id="description" name="description" placeholder="Short description" value="{{ $investment->description}}" required="true">
             {!! $errors->first('description','<div class="invalid-feedback">:message        </div>') !!}

                   <small for="inlineFormInputGroup">amount</small>
    
    <input type="text" class="form-control @if ($errors->any()) {{$errors->has('amount') ? 'is-invalid':'is-valid'}} @endif" id="amount" name="amount" placeholder="Supplie´s price" value="{{ $investment->amount}}" required="true">
               {!! $errors->first('amount','<div class="invalid-feedback">:message        </div>') !!}


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

