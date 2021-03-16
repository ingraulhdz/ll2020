@extends('main')


@section('content')


<form action="{{route('categoryExpense.store')}}" method="POST" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">

 <small for="inlineFormInputGroup">Name</small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('name') ? 'is-invalid':'is-valid'}} @endif" id="name" name="name" placeholder="Name" value="{{ old('name') }}" required="true">
  {!! $errors->first('name','<div class="invalid-feedback">:message        </div>') !!}

 <small for="inlineFormInputGroup">Description</small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('description') ? 'is-invalid':'is-valid'}} @endif" id="description" name="description" placeholder="Description " value="{{ old('description') }}" required="true">
{!! $errors->first('description','<div class="invalid-feedback">:message        </div>') !!}


    

    <button type="submit">Save</button>


</form>


@stop

