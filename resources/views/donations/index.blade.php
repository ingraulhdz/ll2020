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
                                <h6 class="h3 mb-0 font-weight-bold text-primary">Donaciones</h6>
                               
                                <!-- <a href="{{route('donations.create')}}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Agregar</span>
                    </a> -->

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>ID</th>
                                        <th>Donador</th>
                                        <th>Cantidad</th>
                                        <th>Proyecto</th>
                                          
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                                    @foreach($donations as $donation)                       

                                        <tr>
                                        <td> <a href="{{ route('donations.show', $donation)}}" > {{$donation->id}}</a></td>
                    
                                        <td>{{$donation->supporter->fullname()}}</td>
                      <td>$ {{$donation->amount}} MXN</td>
                      <td>{{$donation->project->name}}</td>
                                            <td>
                           
<form action="{{route('donations.destroy', $donation)}}" method="POST">
     <input type="hidden" name="_method" value="DELETE">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   @if($donation->status)        <button type="submit">            
   <a href="#" class="d-none  btn btn-danger btn-circle d-sm-inline-block  btn-sm  shadow-sm">
                                                    <i class="fas fa-trash"></i>
                                                </a></buttom>
                                                @else<button type="submit">
                                                <a href="#" class="d-none  btn btn-success btn-circle d-sm-inline-block  btn-sm  shadow-sm">
                                                    <i class="fas fa-check"></i>
                                                </a></buttom>
                                                @endif

                                               
                                                </form> 
                                                <button type="">            
   <a href="{{route('donations.edit' , $donation)}}" class="d-none  btn btn-info btn-circle d-sm-inline-block  btn-sm  shadow-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a></buttom>
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
