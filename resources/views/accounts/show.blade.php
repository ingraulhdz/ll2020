@extends('main')


@section('content')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$account->owner}}- {{$account->bank}}</h6>
    </div>
    <div class="card-body">         





<b>Information</b>		 
		<ul >
    <li ><b>Propietario: </b>{{$account->owner}}</li>
    <li ><b>Banco: </b>{{$account->bank}}</li>
	<li ><b>Numero de tarjeta: </b>{{$account->card}}</li>
	<li ><b>Numero de cuenta: </b>{{$account->account_number}}</li>
	<li ><b>Numero de Ruta: </b>{{$account->route_number}}</li>
	<li ><b>App: </b>{{$account->route_number}}</li>
	<li ><b>Telefono: </b>{{$account->route_number}}</li>
	<li ><b>E-mail: </b>{{$account->route_number}}</li>
  
		  </ul>
</div>
</div>

@endsection