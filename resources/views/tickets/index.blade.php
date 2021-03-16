
                      @extends('main')

@section('css')
<link href="/backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endsection

@section('content')

                    <!-- Page Heading -->
     <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h6 class="h3 mb-0 font-weight-bold text-primary">Tickets</h6>
                              
                                @can('tickets.restore')
                                <a href="{{route('tickets.index')}}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Trash</span>
                    </a>
@endcan
                              
                              
                                @can('tickets.create')
                                <a href="{{route('tickets.create')}}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Agregar</span>
                    </a>
@endcan
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>ID</th>
                                        <th>Modulo</th>
                                        <th>Especificacion</th>
                                        <th>Descripcion</th>
                                        <th>Creador</th>
                                        <th>Estado</th>
 @if(auth()->user()->can('tickets.destroy') || auth()->user()->can('tickets.edit') || auth()->user()->can('tickets.show'))

                                        <th >{{__('Options') }}</th>
                                        @endif
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                                    @foreach($tickets as $ticket)                       

                                        <tr>
                                        <td> # <a href="{{ route('tickets.show', $ticket)}}" > {{$ticket->id}}</a></td>
                 
                      <td>{{$ticket->module}}</td>
                      <td>{{$ticket->specification}}</td>
                      <td>{{$ticket->description}}</td>
                      <td>{{$ticket->claimant}}
                      @foreach(App\Member::get() as $item)
        @if( $item->id == $ticket->claimant_id)
{{$item->name}}
        @endif
        @endforeach
          </select>
                      </td>
                      <td>{{$ticket->status_ticket}}</td>


                      @if(auth()->user()->can('tickets.destroy') || auth()->user()->can('tickets.edit') || auth()->user()->can('tickets.show'))

                      <td>
           


                      @can('tickets.show')

                                    <a href="{{ route('tickets.show', $ticket->id) }}" 
                                    class="btn btn-sm btn-success">
                                        ver
                                    </a>
                                    @endcan
                                    @can('tickets.edit')

                                    <a href="{{ route('tickets.edit', $ticket->id) }}" 
                                    class="btn btn-sm btn-primary">
                                        editar
                                    </a>
                                    @endcan


                       @if($ticket->delete_at)

          <form action="{{route('tickets.delete', $ticket)}}" method="POST">
     <input type="hidden"  name="_method" value="DELETE">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>         


    </form> 
                   
    
    @else
    
   

             <a href="{{ route('tickets.restore', $ticket->id) }}" class="btn btn-info btn-sm">
            <span class="fa fa-refresh"></span> Restore</a>

@endif
                                            </td>
                                            @endif



                                        </tr>
                                 
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


@endsection

@section('js')

 <!-- Page level plugins -->
 <script src="/backend/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script src="/backend/js/demo/tableDonations.js"></script>

@endsection
