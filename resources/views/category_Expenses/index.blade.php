@extends('main')

@section('content')

<a href="{{route('categoryExpense.create')}}">Crear</a>
<br>
                <table width="100%" cellspacing="1">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                 
                  <tbody>
          @foreach($categories as $categoryExpense)                       
                    <tr>
                      <td>{{$categoryExpense->name}}</td>
                      <td>{{$categoryExpense->description}}</td>
                              <td>
@if($categoryExpense->status) <span > Active</span>@else
  <span > Inactive</span>

@endif
                      </td>
                  <td>  
                   
<form action="{{route('categoryExpense.destroy', $categoryExpense)}}" method="POST">
     <input type="hidden" name="_method" value="DELETE">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
@if($categoryExpense->status)   <button type="submit">Eliminar</button>@else
   <button  type="submit">Activar</button>

@endif

  

<a href="{{ route('categoryExpense.edit', $categoryExpense)}}" >Editar</a>
<a href="{{ route('categoryExpense.show', $categoryExpense)}}" >Ver</a>

</form> 



                  </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
   
@endsection

@section('js')
  

@stop

