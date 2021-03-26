@extends('main')


@section('content')




<div class="card shadow mb-4">
    

     <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h6 class="h3 mb-0 font-weight-bold text-primary">{{__('Add New Account')}}</h6>
                              
<a href="{{route('accounts.index')}}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">{{__('Back')}}</span>
                    </a>
                                                </div>
                        </div>

    <div class="card-body">         



    <form action="{{route('accounts.store')}}" method="POST" class="user">
<input type="hidden" name="_token" value="{{ csrf_token() }}">


 <div class="form-group row">
                                    <div class="col-sm-8 offset-2">
                                       
                                       

 <small for="inlineFormInputGroup">Pais </small>

 <select id="country"  name="country" class="form-control-user form-select @if ($errors->any()) {{$errors->has('country') ? 'is-invalid':'is-valid'}} @endif">
 <option value="" class="" selected> Selecciona un Pais</option>

 <option value="Mexico" class=""> Mexico</option>
 <option value="USA" class=""> USA</option>
</select>

                                       
                                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>

                                </div>
                                

                                
 <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                       
                                       
                                       
                                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>

                                    <div class="col-sm-6">
                                      
                                      

                                    </div>
                                </div>
                                



 <div class="form-group" id="div-owner">


<small for="inlineFormInputGroup">Propietario</small>
<input type="text" class="form-control form-control-user @if ($errors->any()) {{$errors->has('owner') ? 'is-invalid':'is-valid'}} @endif" id="owner" name="owner" placeholder="Propietario de la cuenta" value="{{ old('owner') }}" required="true">
  {!! $errors->first('owner','<div class="invalid-feedback">:message        </div>') !!}
</div>


 <div class="form-group" id="div-bank">

  <small for="inlineFormInputGroup">Banco</small>
<input type="text" class="form-control form-control-user @if ($errors->any()) {{$errors->has('bank') ? 'is-invalid':'is-valid'}} @endif" id="bank" name="bank" placeholder="Nombre del banco" value="{{ old('bank') }}" required="true">
  {!! $errors->first('bank','<div class="invalid-feedback">:message        </div>') !!}
</div>


 <div class="form-group" id="div-card">

  <small for="inlineFormInputGroup">Numero de tarjeta </small>
<input type="text" class="form-control form-control-user @if ($errors->any()) {{$errors->has('card') ? 'is-invalid':'is-valid'}} @endif" id="card" name="card" placeholder="Numero de la tarjeta" value="{{ old('card') }}" required="true">
 {!! $errors->first('card','<div class="invalid-feedback">:message        </div>') !!}


</div>


 <div class="form-group" id="div-acoount">

 <small for="inlineFormInputGroup">Numero de cuenta </small>
<input type="text" class="form-control form-control-user @if ($errors->any()) {{$errors->has('account_number') ? 'is-invalid':'is-valid'}} @endif" id="account_number" name="account_number" placeholder="Numero de Cuenta" value="{{ old('account_number') }}" required="true">
 {!! $errors->first('account_number','<div class="invalid-feedback">:message        </div>') !!}


</div>


 <div class="form-group" id="div-routing">

 <small for="inlineFormInputGroup">Numero de ruta </small>
<input type="text" class="form-control form-control-user @if ($errors->any()) {{$errors->has('route_number') ? 'is-invalid':'is-valid'}} @endif" id="route_number" name="route_number" placeholder="Numero de Ruta" value="{{ old('route_number') }}" required="true">
 {!! $errors->first('route_number','<div class="invalid-feedback">:message        </div>') !!}



</div>


 <div class="form-group" id="div-phone">

 <small for="inlineFormInputGroup">Telefono </small>
<input type="text" class="form-control form-control-user @if ($errors->any()) {{$errors->has('phone') ? 'is-invalid':'is-valid'}} @endif" id="phone" name="phone" placeholder="Numero de Cuenta" value="{{ old('phone') }}" required="true">
 {!! $errors->first('phone','<div class="invalid-feedback">:message        </div>') !!}


</div>


 <div class="form-group" id="div-zelle">

 <small for="inlineFormInputGroup">Zelle </small>
<input type="text" class="form-control form-control-user @if ($errors->any()) {{$errors->has('zelle') ? 'is-invalid':'is-valid'}} @endif" id="zelle" name="zelle" placeholder="N" value="{{ old('zelle') }}" >
 {!! $errors->first('zelle','<div class="invalid-feedback">:message        </div>') !!}


</div>


 <div class="form-group" id="div-cashapp">

 <small for="inlineFormInputGroup">Cash App </small>
<input type="text" class="form-control form-control-user @if ($errors->any()) {{$errors->has('cashapp') ? 'is-invalid':'is-valid'}} @endif" id="cashapp" name="cashapp" placeholder="Cash app " value="{{ old('cashapp') }}">
 {!! $errors->first('cashapp','<div class="invalid-feedback">:message        </div>') !!}



</div>


 <div class="form-group" id="div-quickpay">

 <small for="inlineFormInputGroup">Quick Pay </small>
<input type="text" class="form-control form-control-user @if ($errors->any()) {{$errors->has('quickpay') ? 'is-invalid':'is-valid'}} @endif" id="quickpay" name="quickpay" placeholder="Quick Pay" value="{{ old('quickpay') }}" >
 {!! $errors->first('quickpay','<div class="invalid-feedback">:message        </div>') !!}


</div>


 <div class="form-group" id="div-paypal">

 <small for="inlineFormInputGroup">Pay pal </small>
<input type="text" class="form-control form-control-user @if ($errors->any()) {{$errors->has('paypal') ? 'is-invalid':'is-valid'}} @endif" id="paypal" name="paypal" placeholder="Pay Pal" value="{{ old('paypal') }}" >
 {!! $errors->first('paypal','<div class="invalid-feedback">:message        </div>') !!}

</div>












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
@section('js')

<script>
      // $(document).ready(function(){
      //         $("#owner").hide();

      // });

        $("#country").on("change", function() {
                  var country = $("#country").val();



if(country == 'USA')  {
  $("#div-zelle").show();
  $("#div-quickpay").show();
  $("#div-paypal").show();
  $("#div-cashapp").show();
}else{

  $("#div-zelle").hide();
  $("#div-quickpay").hide();
  $("#div-paypal").hide();
  $("#div-cashapp").hide();}





});
</script>
@endsection