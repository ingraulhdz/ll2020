
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
                                <h6 class="h3 mb-0 font-weight-bold text-primary">Data</h6>
                              
                                <a href="{{route('registros.index')}}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Trash</span>
                    </a>
                              
                              
                                <a href="{{route('registros.create')}}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-success btn-icon-split">
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
                                        <th>Nombre</th>
                                        <th>Cantidad</th>


                                        <th >{{__('Options') }}</th>
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                                    @foreach($registros as $registro)                       

                                        <tr>
                                        <td>  <a href="{{ route('registros.show', $registro)}}" > {{$registro->name}}</a></td>
                 
                      <td>{{$registro->amount}}</td>

<td>                   
           

          <form action="{{route('registros.delete', $registro)}}" method="POST">


                                             <a class='btn btn-sm btn-success btn-circle show'  href="{{ route('registros.show', $registro) }}">
                                                 <i class="fas fa-eye text-gray-100 "></i>

                                             </a>


                                 <a class='btn btn-sm btn-primary btn-circle show'  href="{{ route('registros.edit', $registro) }}">
                                                 <i class="fas fa-edit text-gray-100 "></i>

                                             </a>



     <input type="hidden"  name="_method" value="DELETE">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <button class='btn btn-sm btn-danger btn-circle show'  value='{{ $registro->id }}'>
                                                 <i class="fas fa-trash text-gray-100 "></i>

                                             </a>
                                         </button>


    </form> 
                   
    

                                            </td>



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
