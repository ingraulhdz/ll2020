@extends('main')


@section('content')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$registro->id}}-</h6>
    </div>
    <div class="card-body">         







<b>Information</b>		 
		<ul >
    <li ><b>ID: </b>{{$registro->id}}</li>
    <li ><b>Nombre: </b>{{$registro->name}}</li>
	<li ><b>Cantidad: </b>{{$registro->amount}}</li>
	<li ><b>Proyecto: </b>{{$registro->project}}</li>
	<li ><b>Pais: </b>{{$registro->country}}</li>
	<li ><b>Cuenta: </b>{{$registro->account}}</li>
	<li ><b>Fecha: </b>{{$registro->created_at}}</li>
	<li ><b>Registrado por: </b>{{$registro->registred_by}}</li>
  
		  </ul>

</div>
</div>
@endsection