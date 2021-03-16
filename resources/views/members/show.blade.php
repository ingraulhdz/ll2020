@extends('main')
@section('css')
<link href="/backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endsection

@section('content')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$member->fullName()}}</h6>
    </div>
    <div class="card-body">         


	<b>Informacion</b>		 
		<ul >
		@if( $member->photo)
		<li>         <img src="{{ $member->photo }}" width="100px" height="100px"> </li>
@endif

    <li ><b>Nombre: </b> {{$member->fullName()}}</li>
    <li ><b>Telefono: </b>{{$member->phone}}</li>
		<li ><b>Email: </b>{{$member->email}}</li>
		<hr>
	  </ul>

	  </ul>
	  <h3>Donaciones</h3>

	  <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  	  <thead>
	  <tr>
	  	<td>Proyecto</td>
		  <td>Cantidad</td>
		  <td>Cargo</td>
		</tr>
	  </thead>
	  <tbody>
	  @foreach(  $member->donations as $item)

	  <tr>

	  <td> {{$item->project->name}}</td>
	  <td> ${{$item->amount}} .00</td>
	  <td> Donor</td>
	</tr>
		  @endforeach

	  </tbody>
</table> 

</div>
</div>
</div>
<div class="card-footer">         
</div>
</div>
@endsection


@section('js')

 <!-- Page level plugins -->
 <script src="/backend/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script src="/backend/js/demo/tableDonations.js"></script>

@endsection
