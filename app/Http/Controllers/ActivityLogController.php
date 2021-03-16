<?php

namespace App\Http\Controllers;

use App\ActivityLog;
use App\Project;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{

    public function index()
   {
     $activityLogs = ActivityLog::orderBy('id', 'ASC')->withTrashed()->get();

    return view('activity_logs.index', compact('activityLogs'));
   }


   public function create($id)
   {return $id;
      return $project =  Project::where('id', 1)->first();
       
       return view('activity_logs.create', compact('project'));
   }


   public function store(Request $request)
   { 
       $data = $this->validate(request(), [
        'name' => 'required',
        'date' => 'required',
        'description' => 'required|min:5|max:244',

 ]);
       try{

           $ActivityLog = new ActivityLog($request->all());
           $ActivityLog->claimant_id =1;
           $ActivityLog->status_ticket = 'OPEN';
           $ActivityLog->save();

        }catch(\Exception $e){

           $messageError = "Someting is worng: ".$e->getMessage();
           \Session::flash('error',$messageError);
           return \Redirect::back()->withInput()->withErrors($messageError);
           }

           $message ='The ActivityLog was created!.';
           \Session::flash('message',$message);
            return redirect()->route('activityLogs.index');
   }


   public function delete($id)
   {


       ActivityLog::destroy($id);
       return redirect()->back()->with("msg", "ActivityLog removed successfully.");
   }

   public function restore($id)
   {
       ActivityLog::where('id', $id)->restore();
       return redirect()->back()->with("msg", "ActivityLog restored successfully.");
   }



   public function edit($id)
   {
           $ActivityLog = ActivityLog::findOrFail($id);
           return view('activity_logs.edit', compact('ActivityLog'));
   }


   public function update(Request $request,$id)
   {
    $data = $this->validate(request(), [
        'name' => 'required',
        'date' => 'required',
        'description' => 'required|min:5|max:244',

 ]);
   try{
           $ActivityLog= ActivityLog::findOrFail($id);
       $ActivityLog->fill($request->all());
       $ActivityLog->save();
       }catch(\Exception $e){

           $messageError = "Someting is worng: ".$e->getMessage();
           \Session::flash('error',$messageError);
           return \Redirect::back()->withInput()->withErrors($messageError);
           }
       $message ='ActivityLog updated! ';
        \Session::flash('message',$message);
       return redirect()->route('activityLogs.index');
   }



   public function destroy($id)
{
$item = ActivityLog::findOrFail($id);

if($item->status){
$item->status = 0;
$message="ActivityLog inactive";
}
else{

$item->status = 1;
$message ="ActivityLog active";

}

$item->save();
       \Session::flash('message',$message);

return back()->with('success', $message);

}



  
   



   public function show($id)
   {

$ActivityLog = ActivityLog::findOrFail($id);
return view('activity_logs.show', compact('ActivityLog'));

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
