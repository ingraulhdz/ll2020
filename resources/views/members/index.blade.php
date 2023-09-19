
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
                                <h6 class="h3 mb-0 font-weight-bold text-primary">Miembros</h6>
                               
                                <a href="{{route('members.create')}}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Add</span>
                    </a>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                           
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                                    @foreach($members as $member)                       

                                        <tr>
                 
                                        <td><a href="{{ route('members.show', $member)}}" >{{$member->fullName()}}</a></td>
                      <td>{{$member->phone}}</td>
                                            <td>
                           
<form action="{{route('members.destroy', $member)}}" method="POST">
     <input type="hidden" name="_method" value="DELETE">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   @if($member->status)         <button class='btn btn-sm btn-danger btn-circle edit'  type="submit" value=''>
                                             <a href="">
                                                 <i class="fas fa-times text-gray-100 "></i>

                                             </a>
                                         </button>
                                                @else
                                                 <button class='btn btn-sm btn-success btn-circle edit'  type="submit" value=''>
                                             <a href="">
                                                 <i class="fas fa-check text-gray-100 "></i>

                                             </a>
                                         </button>

                                                @endif                                                

                                             <a class='btn btn-sm btn-primary btn-circle edit' href="{{route('members.edit', $member)}}">
                                                 <i class="fas fa-eye text-gray-100 "></i>

                                             </a>

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
