@extends('main')


@section('content')


<div class="card shadow mb-4">
    
    <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h6 class="h3 mb-0 font-weight-bold text-primary"># 00{{$investment->id}}</h6>
          
<a href="{{route('investments.index')}}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">{{__('Back')}}</span>
                    </a>
                                                </div>
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