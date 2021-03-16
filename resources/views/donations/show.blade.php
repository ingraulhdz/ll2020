@extends('main')


@section('content')



<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"># {{$donation->id}}-</h6>
    </div>
    <div class="card-body">         





<b>Information</b>		 
		<ul >
    <li ><b>Donante: </b>{{$donation->supporter->name}} </li>
    <li ><b>Proyecto: </b>{{$donation->project->name}}</li>
	<li ><b>Cantidad: </b>$ {{$donation->amount}} MXN</li>
    <li ><b>Receptor: </b>{{$donation->supporter->name}}</li>
	<li ><b>Fecha: </b>{{Carbon\Carbon::parse($donation->created_at)->locale('es_MX')->isoFormat('LLLL')}}</li>

    <li>     <img src="{{ $donation->voucher }}" width="100px" height="100px"> </li>
		  </ul>

</div>
</div>
@endsection