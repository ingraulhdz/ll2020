@extends('main')


@section('content')


<div class="card shadow mb-4">
   
                         <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h6 class="h3 mb-0 font-weight-bold text-primary">{{__('User')}}</h6>
                              
<a href="{{route('users.index')}}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-primary btn-icon-split">
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
    <li ><b>ID del user: </b>{{$user->id}}</li>
    <li ><b>E-mail: </b>{{$user->email}}</li>
	<li ><b>Name: </b>{{$user->name}}</li>
    <li><b>Role: </b>{{$user->roles[0]->name}}</li>

    <ul>
          <li><b>Permissions via Roles</b></li>	
@foreach($user->getPermissionsViaRoles() as $permission)

<li>{{$permission->front_name}}</li>
@endforeach



    </ul>

    <ul>
          <b>{{__('Special Permissions')}}</b>
@foreach($user->getDirectPermissions() as $permission)

<li>{{$permission->front_name}}</li>
@endforeach



    </ul>
		  </ul>

</div>
</div>
@endsection