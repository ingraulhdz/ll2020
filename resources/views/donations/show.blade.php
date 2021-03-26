@extends('main')


@section('content')



<div class="card shadow mb-4">
   
    <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h6 class="h3 mb-0 font-weight-bold text-primary">#00{{$donation->id}}</h6>
          
<a href="{{route('donations.index')}}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-primary btn-icon-split">
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
    <li ><b>Donante: </b>{{$donation->supporter->name}} </li>
    <li ><b>Proyecto: </b>{{$donation->project->name}}</li>
	<li ><b>Cantidad: </b>$ {{$donation->amount}} MXN</li>
    <li ><b>Account Owner: </b>{{$donation->supporter->name}}</li>
	<li ><b>Fecha: </b>{{Carbon\Carbon::parse($donation->created_at)->locale('es_MX')->isoFormat('LLLL')}}</li>

    <li>     <img src="{{ $donation->voucher }}" width="100px" height="100px"> </li>
		  </ul>

</div>
</div>
@endsection