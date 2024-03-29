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

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Voucher</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="{{ $donation->voucher }}" width="100%" height="100%">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<b>Information</b>		 
		<ul >
    <li ><b>Supporter: </b>{{$donation->supporter->fullname()}} </li>
    <li ><b>Project: </b>{{$donation->project->name}}</li>
	<li ><b>Amount: </b>$ {{number_format($donation->amount)}} MXN</li>
    <li ><b>Account Owner: </b>{{$donation->account->owner}}</li>
    <li ><b>Account Country: </b>{{$donation->account->country}}</li>
	<li ><b>Date: </b>{{Carbon\Carbon::parse($donation->created_at)->locale('es_MX')->isoFormat('LLLL')}}</li>

    <li>   <button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">
  Show Voucher
</button>   </li>
		  </ul>

</div>
</div>
@endsection