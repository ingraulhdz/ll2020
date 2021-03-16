@extends('main')


@section('content')





<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Registrar gasto al proyecto {{$project->name}}</h6>
    </div>
    <div class="card-body">         



    <form action="{{route('investments.store')}}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="project_id" value="{{ $project->id}}">



<small for="inlineFormInputGroup">Category</small>

<select id="category_id" name="category_id" class="form-control @if ($errors->any()) {{$errors->has('name') ? 'is-invalid':'is-valid'}} @endif">

@foreach(App\CategoryExpense::get() as $categoryExpense)
<option value=" {{$categoryExpense->id}} "> {{$categoryExpense->name}} </option>

@endforeach
</select><br>


<small for="inlineFormInputGroup">Nombre</small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('name') ? 'is-invalid':'is-valid'}} @endif" id="name" name="name" placeholder="Nombre del gasto" value="{{ old('name') }}" required="true">
  {!! $errors->first('name','<div class="invalid-feedback">:message        </div>') !!}
  <br>

<small for="inlineFormInputGroup">Descripcion</small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('description') ? 'is-invalid':'is-valid'}} @endif" id="Descripcion" name="description" placeholder="Description" value="{{ old('description') }}" required="true">
  {!! $errors->first('description','<div class="invalid-feedback">:message        </div>') !!}
  <br>

  <small for="inlineFormInputGroup">Cantidad</small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('amount') ? 'is-invalid':'is-valid'}} @endif" id="amount" name="amount" placeholder="
Amount" value="{{ old('amount') }}" required="true">
  {!! $errors->first('amount','<div class="invalid-feedback">:message        </div>') !!}


  <small > Comprobante</small>
   
   <input type="file" class="form-control @if ($errors->any()) {{$errors->has('image') ? 'is-invalid':'is-valid'}} @endif" id="image" name="image" placeholder="Fist photo"  value="{{ old('image') }}" >
   {!! $errors->first('image','<div class="invalid-feedback">:message        </div>') !!}




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


