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
                                <h6 class="h3 mb-0 font-weight-bold text-primary">{{__('Gastos')}}</h6>
            
<a href="/home" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">{{__('Back')}}</span>
                    </a>
                                                </div>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Cantidad </th>
                                            <th>Proyecto</th>
                                           
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                                    @foreach($investments as $investment)                       

                                        <tr>
                                        <td> <a href="{{ route('investments.show', $investment)}}" > {{$investment->name}}</a></td>
                      <td>$ {{number_format($investment->amount)}} MXN</td>
                                            <td>{{$investment->project->name}}</td>

                                            <td>
        
    <button class='btn btn-sm btn-primary btn-circle edit'  type="submit" value=''>
                                             <a href="{{route('investments.edit', $investment)}}">
                                                 <i class="fas fa-edit text-gray-100 "></i>

                                             </a>
                                         </button>

                                
                                         
    <button class='btn btn-sm btn-success btn-circle edit'  type="submit" value=''>
                                             <a href="{{route('investments.show', $investment)}}">
                                                 <i class="fas fa-eye text-gray-100 "></i>

                                             </a>
                                         </button>

                                
                                            
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
