@extends('main')


@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$donation->id}}</h6>
    </div>
    <div class="card-body">         




<form action="{{route('donations.update', $donation)}}" method="POST" enctype="multipart/form-data">

<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="id" value="{{ $donation->id }}">
<small for="inlineFormInputGroup"> Donante</small>

<select class="form-control @if ($errors->any()) {{$errors->has('rol_id') ? 'is-invalid':'is-valid'}} @endif" id="supporter_id" name="supporter_id"  value="{{ $donation->supporter_id }}" >
           <option value="">Selecciona Donante</option>
       @foreach(App\Member::get() as $member) 
         <option value='{{ $member->id }}' @if($member->id == $donation->supporter_id ) selected  @endif >{{ $member->name }}</option>
        @endforeach
        </select>

       
 
      <small for="inlineFormInputGroup"> Cantidad</small>
  
        <input type="text" class="form-control @if ($errors->any()) {{$errors->has('amount') ? 'is-invalid':'is-valid'}} @endif" id="amount" name="amount" placeholder="Short amount" value="{{ $donation->amount}}" required="true">
                   {!! $errors->first('amount','<div class="invalid-feedback">:message        </div>') !!}

                   <small for="inlineFormInputGroup"> Proyecto</small>

<select class="form-control @if ($errors->any()) {{$errors->has('rol_id') ? 'is-invalid':'is-valid'}} @endif" id="project_id" name="project_id"  value="{{ $donation->project_id }}" >
           <option value="">Selecciona Donante</option>
       @foreach(App\Project::get() as $project) 
         <option value='{{ $project->id }}' @if($project->id == $donation->project_id ) selected  @endif >{{ $project->name }}</option>
        @endforeach
        </select>
        <small > Comprobante</small>
   
   <input type="file" class="form-control @if ($errors->any()) {{$errors->has('image') ? 'is-invalid':'is-valid'}} @endif" id="voucher" name="voucher" placeholder="Fist photo"  value="{{ old('voucher') }}" >
{!! $errors->first('voucher','<div class="invalid-feedback">:message        </div>') !!}


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

