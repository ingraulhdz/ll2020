@extends('main')


@section('content')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"># {{$ticket->id}}-</h6>
    </div>
    <div class="card-body">         







<b>Information</b>		 
		<ul >
    <li ><b>ID del Ticket: </b>{{$ticket->id}}</li>
    <li ><b>descripcion: </b>{{$ticket->description}}</li>
	<li ><b>Modulo: </b>{{$ticket->module}}</li>
	<li ><b>Especificacion: </b>{{$ticket->specification}}</li>
  
		  </ul>

</div>
</div>
@endsection