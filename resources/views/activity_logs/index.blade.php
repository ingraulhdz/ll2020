
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
                                <h6 class="h3 mb-0 font-weight-bold text-primary">{{__('Activity Log')}} {{$project->name}}</h6>
                              
                                <a href="{{route('activity_logs.index')}}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Trash</span>
                    </a>
                              
                              
                                <a href="{{route('activity_logs.create', 5)}}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Agregar</span>
                    </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>{{__('Registred by')}}</th>
                                        <th>Estado</th>
 @if(auth()->user()->can('activityLogs.destroy') || auth()->user()->can('activityLogs.edit') || auth()->user()->can('activityLogs.show'))

                                        <th >{{__('Options') }}</th>
                                        @endif
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                                    @foreach($activityLogs as $log)                       

                                        <tr>
                                        <td> # <a href="{{ route('activity_logs.show', $log->id)}}" > {{$log->id}}</a></td>
                 
                      <td>{{$log->name}}</td>
                      <td>{{$log->description}}</td>
                      <td>{{$log->date}}</td>
                      <td>{{$log->registred_by}}
                      @foreach(App\Member::get() as $item)
        @if( $item->id == $log->claimant_id)
{{$item->name}}
        @endif
        @endforeach
          </select>
                      </td>
                      <td>{{$log->status_ticket}}</td>


                      @if(auth()->user()->can('activityLogs.destroy') || auth()->user()->can('activityLogs.edit') || auth()->user()->can('activityLogs.show'))

                      <td>
           



                                    <a href="{{ route('activity_logs.show', $log->id) }}" 
                                    class="btn btn-sm btn-success">
                                        ver
                                    </a>
                               

                                    <a href="{{ route('activity_logs.edit', $log->id) }}" 
                                    class="btn btn-sm btn-primary">
                                        editar
                                    </a>
                        

          <form action="{{route('activity_logs.delete', $log)}}" method="POST">
     <input type="hidden"  name="_method" value="DELETE">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>         


    </form> 
                   
    
    
   

             <a href="{{ route('activity_logs.restore', $log->id) }}" class="btn btn-info btn-sm">
            <span class="fa fa-refresh"></span> Restore</a>

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
