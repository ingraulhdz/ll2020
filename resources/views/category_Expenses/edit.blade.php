@extends('main')


@section('content')



<form action="{{route('categoryExpense.update', $categoryExpense)}}" method="POST" >

<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="id" value="{{ $categoryExpense->id }}">

      <small > Name</small>
   
        <input type="text" class="form-control @if ($errors->any()) {{$errors->has('name') ? 'is-invalid':'is-valid'}} @endif" id="name" name="name" placeholder="Name" value="{{ $categoryExpense->name}}" required="true">
        {!! $errors->first('name','<div class="invalid-feedback">:message        </div>') !!}

     
 
      <small for="inlineFormInputGroup"> Description</small>
  
        <input type="text" class="form-control @if ($errors->any()) {{$errors->has('description') ? 'is-invalid':'is-valid'}} @endif" id="description" name="description" placeholder="Short Description" value="{{ $categoryExpense->description}}" required="true">
                   {!! $errors->first('description','<div class="invalid-feedback">:message        </div>') !!}

    <button type="submit"> update</button>

</form>


@stop

