<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{

    public function index()
   {
    $registros = Registro::orderBy('id', 'ASC')->get();
    return view('registros.index', compact('registros'));
   }


   public function create()
   {
       return view('registros.create');
   }


   public function store(Request $request)
   { 
       $data = $this->validate(request(), [
'amount' => 'required',
        'name' => 'required|min:2|max:244',
 ]);
       try{

           $registro = new Registro($request->all());
           $registro->save();

        }catch(\Exception $e){

           $messageError = "Someting is worng: ".$e->getMessage();
           \Session::flash('error',$messageError);
           return \Redirect::back()->withInput()->withErrors($messageError);
           }

           $message ='The ticket was created!.';
           \Session::flash('message',$message);
            return redirect()->route('registros.index');
   }


   public function delete($id)
   {


       Registro::destroy($id);
       return redirect()->back()->with("msg", "Registro removed successfully.");
   }

   public function restore($id)
   {
       Registro::where('id', $id)->restore();
       return redirect()->back()->with("msg", "Registro restored successfully.");
   }



   public function edit($id)
   {
           $registro = Registro::findOrFail($id);
           return view('registros.edit', compact('registro'));
   }


   public function update(Request $request,$id)
   {
    $data = $this->validate(request(), [
        'amount' => 'required',
        'name' => 'required|min:2|max:244',

 ]);
   try{
           $registro= Registro::findOrFail($id);
       $registro->fill($request->all());
       $registro->save();
       }catch(\Exception $e){

           $messageError = "Someting is worng: ".$e->getMessage();
           \Session::flash('error',$messageError);
           return \Redirect::back()->withInput()->withErrors($messageError);
           }
       $message ='ticket updated! ';
        \Session::flash('message',$message);
       return redirect()->route('registros.index');
   }



   public function destroy($id)
{
$item = Registro::findOrFail($id);

if($item->status){
$item->status = 0;
$message="ticket inactive";
}
else{

$item->status = 1;
$message ="ticket active";

}

$item->save();
       \Session::flash('message',$message);

return back()->with('success', $message);

}



  
   



   public function show($id)
   {

$registro = Registro::findOrFail($id);
return view('registros.show', compact('registro'));

   }



// public function pdf(Request $request)
//    {
//         $clientes = Cliente::all();
//         $date = date('Y-m-d');
//         $view =  \View::make('cliente.reporte-clientes', compact('clientes', 'date'))->render();
//         $pdf = \App::make('dompdf.wrapper');
//         $pdf->loadHTML($view);
       
// 	    return $pdf->download('reporte-Clientes.pdf');

//    }





// public function excel()
//      {
       
//         $clientes = Cliente::orderby('id','DESC')->get();
//         $date = date('Y-m-d');
//         Excel::create('Clientes',function($excel) use($clientes)
//         { 
// 	        $excel->sheet('Clientes', function($sheet) use($clientes)
// 	         {
// 	        $sheet->loadView('cliente.reporte-clientes-Excel', ['clientes'=>$clientes ]);
//               });
//         })->export('xlsx');

// 	}


}
