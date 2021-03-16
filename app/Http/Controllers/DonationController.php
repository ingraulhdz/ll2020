<?php

namespace App\Http\Controllers;

use App\Donation;
use App\Project;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    
    public function index()
    {
        $donations = donation::orderBy('id', 'ASC')->get();
        return view('donations.index', compact('donations'));
    }


	public function create(Project $id)
	{
        $project = '';
        return view('donations.create', compact('project'));
	}


	public function store(Request $request)
	{ 
        $data = $this->validate(request(), [
//             'name' => 'required|min:2|max:244',
//             'last_name' => 'required|min:2|max:244',
'supporter_id' => 'required|nullable',
'amount' => 'required|numeric|nullable',
//'voucher' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

   ]);
     
		try{

            $donation = new donation($request->all());
            $donation->save();

            $imageName = $donation->id.'.'.request()->voucher->getClientOriginalExtension();
            $path = '/images/projects/'. $donation->project_id.'/'.'donations/';

            request()->voucher->move(public_path($path), $imageName);
$donation->voucher = $path.''.$imageName;
$donation->save();
			$donation->save();

 		}catch(\Exception $e){

            $messageError = "Someting is worng: ".$e->getMessage();
            \Session::flash('error',$messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
        	}

            $message ='LA donacion se realizo con exito';
            \Session::flash('message',$message);
             return redirect()->route('projects.show', $donation->project_id);
	}




	public function edit($id)
	{
			$donation = donation::findOrFail($id);
			return view('donations.edit', compact('donation'));
	}


	public function update(Request $request,$id)
	{
//         $data = $this->validate(request(), [
//             'name' => 'required|min:2|max:244',
//             'last_name' => 'required|min:2|max:244',
//             'email' => 'required|min:5|email|max:244',
//          'phone' => 'required|numeric',
//   ]);
    try{
            $donation= donation::findOrFail($id);
        $donation->fill($request->all());
        $donation->save();
        $imageName = $donation->id.'.'.request()->voucher->getClientOriginalExtension();
            $path = '/images/projects/'. $donation->project_id.'/'.'donations/';

            request()->voucher->move(public_path($path), $imageName);
$donation->voucher = $path.''.$imageName;
$donation->save();
        }catch(\Exception $e){

            $messageError = "Someting is worng: ".$e->getMessage();
            \Session::flash('error',$messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
            }
        $message ='Miembro Actualizado ';
	 	\Session::flash('message',$message);
        return redirect()->route('donations.index');
	}


    public function destroy($id)
    {
    
     $item = Donation::findOrFail($id);
    
     if($item->status){
    $item->status = 0;
    $message="Donation inactive";
    }
    else{
    
    $item->status = 1;
    $message ="Donation active";
    
    }
    
     $item->save();
            \Session::flash('message',$message);
    
     return back()->with('success', $message);
    
    }
    

   
	



	public function show($id)
	{

$donation = Donation::findOrFail($id);
return view('donations.show', compact('donation'));

	}

}
