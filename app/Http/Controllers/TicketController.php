<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function index()
   {
    $tickets = Ticket::orderBy('id', 'ASC')->withTrashed()->get();
    return view('tickets.index', compact('tickets'));
   }


   public function create()
   {
       return view('tickets.create');
   }


   public function store(Request $request)
   { 
       $data = $this->validate(request(), [
        'module' => 'required',
        'specification' => 'required',
        'description' => 'required|min:5|max:244',

 ]);
       try{

           $ticket = new ticket($request->all());
           $ticket->claimant_id =1;
           $ticket->status_ticket = 'OPEN';
           $ticket->save();

        }catch(\Exception $e){

           $messageError = "Someting is worng: ".$e->getMessage();
           \Session::flash('error',$messageError);
           return \Redirect::back()->withInput()->withErrors($messageError);
           }

           $message ='The ticket was created!.';
           \Session::flash('message',$message);
            return redirect()->route('tickets.index');
   }


   public function delete($id)
   {


       Ticket::destroy($id);
       return redirect()->back()->with("msg", "Ticket removed successfully.");
   }

   public function restore($id)
   {
       Ticket::where('id', $id)->restore();
       return redirect()->back()->with("msg", "Ticket restored successfully.");
   }



   public function edit($id)
   {
           $ticket = Ticket::findOrFail($id);
           return view('tickets.edit', compact('ticket'));
   }


   public function update(Request $request,$id)
   {
    $data = $this->validate(request(), [
        'module' => 'required',
        'specification' => 'required',
        'description' => 'required|min:5|max:244',

 ]);
   try{
           $ticket= Ticket::findOrFail($id);
       $ticket->fill($request->all());
       $ticket->save();
       }catch(\Exception $e){

           $messageError = "Someting is worng: ".$e->getMessage();
           \Session::flash('error',$messageError);
           return \Redirect::back()->withInput()->withErrors($messageError);
           }
       $message ='ticket updated! ';
        \Session::flash('message',$message);
       return redirect()->route('tickets.index');
   }



   public function destroy($id)
{
$item = Ticket::findOrFail($id);

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

$ticket = Ticket::findOrFail($id);
return view('tickets.show', compact('ticket'));

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
