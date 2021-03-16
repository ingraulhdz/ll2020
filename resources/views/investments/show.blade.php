@extends('main')


@section('content')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Informacion del gasto {{$investment->name}}</h6>
    </div>
    <div class="card-body">         





<b>Information</b>		 
		<ul >
    <li ><b>Gasto: </b>{{$investment->name}}</li>
    <li ><b>Descripcion: </b>{{$investment->description}}</li>
	<li ><b>Cantidad: </b>$ {{$investment->amount}} MXN</li>
	<li ><b>Proyecto: </b>{{$investment->project->name}}</li>
	<li ><b>Fecha: </b>	{{    Carbon\Carbon::parse($investment->created_at)->locale('es_MX')->isoFormat('LLLL')}}
</li>
<li>     <img src="{{ $investment->voucher }}" width="100px" height="100px"> </li>

		  </ul>

</div>
</div>
@endsection