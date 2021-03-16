@extends('main')


@section('content')




<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{__('Add new Activity')}} {{$project->name}}</h6>
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
         
 

          <small for="inlineFormInputGroup">Name</small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('name') ? 'is-invalid':'is-valid'}} @endif" id="name" name="name" placeholder="Breve descripcion " value="{{ old('name') }}" required="true">
{!! $errors->first('name','<div class="invalid-feedback">:message        </div>') !!}

 
          <small for="inlineFormInputGroup">Descripcion</small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('description') ? 'is-invalid':'is-valid'}} @endif" id="description" name="description" placeholder="Breve descripcion " value="{{ old('description') }}" required="true">
{!! $errors->first('description','<div class="invalid-feedback">:message        </div>') !!}


<small for="inlineFormInputGroup">Observation</small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('observation') ? 'is-invalid':'is-valid'}} @endif" id="description" name="observation" placeholder="Breve descripcion " value="{{ old('observation') }}" required="true">
{!! $errors->first('observation','<div class="invalid-feedback">:message        </div>') !!}

<small for="inlineFormInputGroup">{{__('Date')}}</small>
<input type="date" class="form-control @if ($errors->any()) {{$errors->has('date') ? 'is-invalid':'is-valid'}} @endif" id="description" name="date" placeholder="Breve descripcion " value="{{ old('date') }}" required="true">
{!! $errors->first('date','<div class="invalid-feedback">:message        </div>') !!}

 
 

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

