@extends('main')


@section('content')


<form action="{{route('donation.store')}}" method="POST" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">

 <small for="inlineFormInputGroup">amount</small>
<input type="text" class="form-control @if ($errors->any()) {{$errors->has('amount') ? 'is-invalid':'is-valid'}} @endif" id="amount" name="amount" placeholder="Fist Name" value="{{ old('amount') }}" required="true">
  {!! $errors->first('amount','<div class="invalid-feedback">:message        </div>') !!}

  <select id="supporter_id" name="supporter_id" >
                        <option value=""  >Selecciona un Donador</option>

 @foreach(App\Member::get() as $item)
        <option value="{{$item->id}}">{{ $item->name }}</option>
        @endforeach
          </select>

          <select id="project_id" name="project_id" >
                        <option value=""  >Selecciona un Proyecto</option>

 @foreach(App\Project::get() as $item)
        <option value="{{$item->id}}">{{ $item->name }}</option>
        @endforeach
          </select>

    <button type="submit">Save</button>


</form>


@stop

