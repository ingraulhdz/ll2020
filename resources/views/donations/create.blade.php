@extends('main')


@section('content')


<div class="card shadow mb-4">
    
    <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h6 class="h3 mb-0 font-weight-bold text-primary">{{__('Donate')}}</h6>
          
<a href="{{route('donations.index')}}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">{{__('Back')}}</span>
                    </a>
                                                </div>
                        </div>
                        
    <div class="card-body">         



<form action="{{route('donations.store')}}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" id="id" name="project_id" value="{{ $project->id }}">
<small for="inlineFormInputGroup">Cantidad</small>

<input type="text" class="form-control @if ($errors->any()) {{$errors->has('amount') ? 'is-invalid':'is-valid'}} @endif" id="amount" name="amount" placeholder="Cantidad" value="{{ old('amount') }}" required="true">
  {!! $errors->first('amount','<div class="invalid-feedback">:message        </div>') !!}
  <small for="inlineFormInputGroup">Donador</small>

  <select id="supporter_id" name="supporter_id" class="form-control @if ($errors->any()) {{$errors->has('amount') ? 'is-invalid':'is-valid'}} @endif" >
                        <option value=""  >Selecciona un Donador</option>

 @foreach(App\Member::get() as $item)
        <option value="{{$item->id}}">{{ $item->fullName() }}</option>
        @endforeach
          </select>


   <small > Comprobante</small>
   
   <input type="file" class="form-control @if ($errors->any()) {{$errors->has('image') ? 'is-invalid':'is-valid'}} @endif" id="voucher" name="voucher" placeholder="Fist photo"  value="{{ old('voucher') }}" >
{!! $errors->first('voucher','<div class="invalid-feedback">:message        </div>') !!}




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

