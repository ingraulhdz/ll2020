
@if(Session::has('message'))
    <script >



// swal({
//   position: 'top-end',
//   type: 'success',
//   title:'{{ Session::get('message') }} ',
//   showConfirmButton: false,
//   timer: 2000
// });


 toastr["success"]('  {{ session('message') }}');

   </script>
@endif
@if(Session::has('error'))
  
   <script >
 toastr["error"](' {{ Session::get('error') }} ');

    </script>

@endif

@if ($errors->any())
   <script >
    var message = '<small>';


    </script>
   
            @foreach ($errors->all() as $error)
             <script >
              var err= '{{ $error }}';
              // toastr["error"](err);
toastr.options = {
  "closeButton": true,   "timeOut": "15000",
}

               message = message+"<li>"+err+"</li>";

             </script>   
            @endforeach
     

        <script >
          toastr["error"](message+"</small> ", "check the follows errors")
/*Swal.fire({
  type: 'error',
  title: 'Oops... Please check the errors',
  html: message
})

*/
    </script>


@endif




 @if (session('status'))
                      

   <script >
 toastr["info"](' {{ Session::get('status') }} ');
 toastr["info"]('  {{ session('status') }}');

    </script>

                    @endif
