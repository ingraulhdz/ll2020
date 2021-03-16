@extends('main')


@section('content')







<b>Information</b>		 
		<ul >
    <li ><b>Name: </b>{{$categoryExpense->name}}</li>
    <li ><b>Description: </b>{{$categoryExpense->description}}</li>
    <li ><b>Status: </b>
                                @if($categoryExpense->status)
                                 <span> Active</span>
                                 @else 
                                <span > Inactive</span>
                              @endif
    </li>
		  </ul>


@endsection