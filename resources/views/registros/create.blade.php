@extends('main')


@section('content')




<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Agregar nuevo Registro</h6>
    </div>
    <div class="card-body">         

    <form action="{{route('registros.store')}}" method="POST" class="user">
<input type="hidden" name="_token" value="{{ csrf_token() }}">




                                <div class="form-group">
                                    <input type="name"id="exampleInputEmail"
                                        placeholder="Nombre Completo"  class="form-control form-control-user  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                                         @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                                </div>


                                <div class="form-group">
                                    <input type="amount"id="exampleInputEmail"
                                        placeholder="Cantidad en Pesos "  class="form-control form-control-user  @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount">
                                         @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                                </div>



                                <div class="form-group">
                                    <input type="email"id="exampleInputEmail"
                                        placeholder="Email Address"  class="form-control form-control-user  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
                                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                                </div>


     
                                <div class="form-group">
                                    <input type="text"id="exampleInputEmail"
                                        placeholder="phone"  class="form-control form-control-user  @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone">
                                         @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                                </div>

                                

                                <div class="form-group">  

                                    <input type="nickname"id="exampleInputEmail"
                                        placeholder="nickname (apodo)"  class="form-control form-control-user  @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}" required autocomplete="nickname">
                                         @error('nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                                </div>


     <div class="row">
     <div class="col-6">

          <select id="project" name="project" placeholder="hola" class="form-control  form-control-select @if ($errors->any()) {{$errors->has('project') ? 'is-invalid':'is-valid'}} @endif" >
                        <option value=""  >Selecciona un Proyecto</option>

                        <option value="Ruedo">Ruedo</option>
                        <option value="Primaria">Escuela Primaria</option>
                        <option value="Centro">Proyectos</option>
                        <option value="Mensualidad">Mensualidad</option>
                        <option value="Otro">Otro</option>
          </select>
</div>
<div class="col-6">
          
          <select id="account" name="account" class="form-control @if ($errors->any()) {{$errors->has('account') ? 'is-invalid':'is-valid'}} @endif" >
                        <option value=""  >Selecciona una Cuenta</option>

                        <option value="AbelH">Abel Hernandez | MX</option>
                        <option value="EliasQ">Elias Quintana | USA</option>
          </select>
</div>
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

