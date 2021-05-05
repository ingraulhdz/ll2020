@extends('main')


@section('content')


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Comprobante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="{{ $investment->voucher }}" width="100%" height="100%">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



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

    <li>   <button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">
  Ver Comprobante
</button>   </li>
		  </ul>

</div>
</div>
@endsection