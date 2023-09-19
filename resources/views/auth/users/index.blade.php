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
                                <h6 class="h3 mb-0 font-weight-bold text-primary">{{__('Users')}}</h6>
                               @can('users.create')
                                <a href="{{route('users.create')}}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Add</span>
                    </a>
@endcan

<a href="/home" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">{{__('Assign')}}</span>
                    </a>
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
                      <th>Name</th>
                      <th>E-mail</th>
                      <th>username</th>
                      <th>Rol</th>
                      <th>Status</th>
                      <th>Options</th>
                 
                    </tr>
                  </thead>
                 
                  <tbody>
          @foreach($users as $user)                       
                    <tr>
                 
                    <td> <a href="{{ route('users.show', $user)}}" > {{$user->name}}</a></td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->username}}</td>
                      <td>{{ $user->roles[0]->name ?? 'Unasigned Role'}}</td>
<td>
    @if($user->status == 1)
    Active
    @elseif($user->status == 0)
     inactive
    @endif
<td>
                           
<form action="{{route('users.destroy', $user)}}" method="POST">
     <input type="hidden" name="_method" value="DELETE">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @if($user->status == 1)
   
   <button class='btn btn-sm btn-danger btn-circle edit'  type="submit" value=''>
                                             <a href="{{route('users.delete', $user)}}">
                                                 <i class="fas fa-times text-gray-100 "></i>

                                             </a>
                                         </button>


    @elseif($user->status == 0)
                                                <button class='btn btn-sm btn-success btn-circle edit'  type="submit" value=''>
                                             <a href="{{route('users.delete', $user)}}">
                                                 <i class="fas fa-plus text-gray-100 "></i>

                                             </a>
                                         </button>
                                                @endif
@can('users.edit')

                                             <a href="{{route('users.edit', $user)}}" class='btn btn-sm btn-info btn-circle edit'  >

                                                 <i class="fas fa-edit text-gray-100 "></i>

                                                                          </a>

                                            
@endcan
@can('users.show')
                                             <a href="{{route('users.show', $user)}}" class='btn btn-sm btn-primary btn-circle edit' >

                                                 <i class="fas fa-eye text-gray-100 "></i>

                                                                                     </a>

                                         @endcan


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
