<?php

namespace App\Http\Controllers;

use App\Investment;
use Illuminate\Http\Request;
use Image;

class InvestmentController extends Controller
{
    
    public function index()
    {
        $investments = Investment::orderBy('id', 'ASC')->get();
        return view('investments.index', compact('investments'));
    }

	public function create()
	{
        return view('investments.create');
	}


	public function store(Request $request)
	{ 
        $data = $this->validate(request(), [
        //'name' => 'required|min:2|max:244',
        'description' => 'required|min:5|max:244',
         'amount' => 'required|numeric',
         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',


  ]);
		try{

			$investment = new Investment($request->all());
			$investment->save();
            $imageName = $investment->id.'.'.request()->image->getClientOriginalExtension();
            $path = '/images/projects/'. $investment->project_id.'/'.'expenses/';

            request()->image->move(public_path($path), $imageName);
$investment->voucher = $path.''.$imageName;
$investment->save();
 		}catch(\Exception $e){

            $messageError = "Someting is worng: ".$e->getMessage();
            \Session::flash('error',$messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
        	}

            $message ='The investment was created!.';
            \Session::flash('message',$message);
             return redirect()->route('projects.show', $investment->project_id);
	}




	public function edit($id)
	{
			$investment = investment::findOrFail($id);
			return view('investments.edit', compact('investment'));
	}


	public function update(Request $request,$id)
	{
     $data = $this->validate(request(), [
        'description' => 'required|min:5|max:244',
        'amount' => 'required|numeric',
        'project_id' => 'required|numeric',

  ]);
    try{
            $investment= Investment::findOrFail($id);
        $investment->fill($request->all());
        $investment->save();
        }catch(\Exception $e){

            $messageError = "Someting is worng: ".$e->getMessage();
            \Session::flash('error',$messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
            }
        $message ='investment updated! ';
	 	\Session::flash('message',$message);
        return redirect()->route('investments.index');
	}



    public function destroy($id)
{

 $item = investment::findOrFail($id);

 if($item->status){
$item->status = 0;
$message="investment inactive";
}
else{

$item->status = 1;
$message ="investment active";

}

 $item->save();
        \Session::flash('message',$message);

 return back()->with('success', $message);

}



   
	



	public function show($id)
	{

$investment = investment::findOrFail($id);
return view('investments.show', compact('investment'));

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
