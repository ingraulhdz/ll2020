<?php

namespace App\Http\Controllers;

use App\Investment;
use App\Project;
use App\Donation;
use App\Member;
use Illuminate\Http\Request;
use Carbon\Carbon; 
use DB;
use Illuminate\Support\Facades\Storage;

class DonationController extends Controller
{
    
    public function index()
    {
        $donations = donation::orderBy('id', 'ASC')->get();
        return view('donations.index', compact('donations'));
    }



    
   public function monitor()
   {    
   $route = \Route::currentRouteName();
    $members = Member::get();
    $investments = Investment::get();
    $projects = Project::get();
   
    

      $topDonators  = DB::table('donations')
      ->join('members', 'members.id', '=', 'donations.supporter_id')
      ->select('members.name as name', DB::raw("donations.amount as amount"))
      ->orderBy('amount', 'DESC')
      ->get()->take(3);


   $donations = Donation::get();
    $division =     DB::select(" 
    SELECT Projects.id, Projects.name, SUM(donations.amount) AS TOTALAMOUNT
    FROM  Projects INNER JOIN  donations
    ON Projects.id=donations.project_id
    GROUP BY Projects.id, Projects.name
");
   


    
    $projects = Project::orderBy('id', 'ASC')->get();


       return view('monitor', compact('projects','members','donations','investments'));
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
