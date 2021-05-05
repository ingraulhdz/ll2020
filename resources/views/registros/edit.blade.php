@extends('main')


@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> #{{$registro->id}}</h6>
    </div>
    <div class="card-body">         




<form action="{{route('registros.update', $registro)}}" method="POST" >

<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="id" value="{{ $registro->id }}">




                                <div class="form-group">
                                    <input type="name"id="exampleInputEmail"
                                        placeholder="Nombre Completo"  class="form-control form-control-user  @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $registro->name }}" required autocomplete="name">
                                         @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                                </div>


                                <div class="form-group">
                                    <input type="amount"id="exampleInputEmail"
                                        placeholder="Cantidad en Pesos "  class="form-control form-control-user  @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') ?? $registro->amount }}" required autocomplete="amount">
                                         @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                                </div>



                                <div class="form-group">
                                    <input type="email"id="exampleInputEmail"
                                        placeholder="Email Address"  class="form-control form-control-user  @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $registro->email }}"  autocomplete="email">
                                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                                </div>


     
                                <div class="form-group">
                                    <input type="text"id="exampleInputEmail"
                                        placeholder="phone"  class="form-control form-control-user  @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') ?? $registro->phone }}"  autocomplete="phone">
                                         @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                                </div>

                                

                                <div class="form-group">  

                                    <input type="nickname"id="exampleInputEmail"
                                        placeholder="nickname (apodo)"  class="form-control form-control-user  @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') ?? $registro->nickname }}"  autocomplete="nickname">
                                         @error('nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                                </div>

  <select id="project" name="project" placeholder="hola" class="form-control  form-control-select @if ($errors->any()) {{$errors->has('project') ? 'is-invalid':'is-valid'}} @endif" >
                        <option value=""  >Selecciona un Proyecto</option>

                        <option value="Ruedo" @if($registro->project =='Ruedo') selected @endif >Ruedo</option>
                        <option value="Primaria" @if($registro->project == 'Primaria') selected @endif >Escuela Primaria</option>
                        <option value="Centro" @if($registro->project == 'Centro') selected @endif>Centro</option>
                        <option value="Mensualidad" @if($registro->project == 'Mensualidad') selected @endif>Mensualidad</option>
                        <option value="Otro" @if($registro->project == 'Otro') selected @endif>Otro</option>
          </select>

     <div class="row">
     <div class="col-6">

            <select id="account" name="account" class="form-control @if ($errors->any()) {{$errors->has('account') ? 'is-invalid':'is-valid'}} @endif" >
                        <option value=""  >Pais</option>

                        <option value="Mexico" @if($registro->country == 'Mexico') selected @endif>Mexico</option>
                        <option value="USA" @if($registro->country == 'USA') selected @endif>U. S. A.</option>
          </select>
</div>
<div class="col-6">
          
          <select id="account" name="account" class="form-control @if ($errors->any()) {{$errors->has('account') ? 'is-invalid':'is-valid'}} @endif" >
                        <option value=""  >Selecciona una Cuenta</option>

                        <option value="AbelH" @if($registro->account == 'AbelH') selected @endif>Abel Hernandez | MX</option>
                        <option value="EliasQ" @if($registro->account == 'EliasQ') selected @endif>Elias Quintana | USA</option>
          </select>
</div>
</div>
    
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

