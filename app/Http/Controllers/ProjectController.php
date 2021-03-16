<?php

namespace App\Http\Controllers;

use App\Investment;
use App\Project;
use App\Donation;
use App\ActivityLog;
use App\Member;
use Illuminate\Http\Request;
use Carbon\Carbon; 
use DB;
use Illuminate\Support\Facades\Storage;
use Image;

class ProjectController extends Controller
{

    public function index()
   {
    $donations = Donation::get();
    $projects = Project::orderBy('id', 'ASC')->get();
    $members = Member::get();
       return view('projects.index', compact('projects','donations','members'));
   }

   
   public function getDataDashboardById(Request $request){

                $project = Project::where('id', $request->id)->first();
                $id = $request->id;
                $donationsByMonth = \DB::select("
                SELECT  SUM(amount) AS total,CONCAT(monthName(created_at)) AS fecha
                FROM donations 
                WHERE project_id=".$id."
                Group by fecha
                ORDER BY created_at DESC
                LIMIT 6 
                ");

                $donationsByMonth = collect($donationsByMonth);

                $dates = array();
                $donations = array();
                
                foreach ($donationsByMonth as $key ) {
                
                array_push($dates, $key->fecha);
                
                }
                
                
                foreach ($donationsByMonth as $key ) {
                
                array_push($donations, $key->total);
                
                }


                
                $division =     DB::select(" 
                SELECT category_expenses.id, category_expenses.name as name, SUM(investments.amount) AS total
                FROM  category_expenses INNER JOIN  investments
                ON category_expenses.id=investments.category_id
                WHERE investments.project_id=".$id."

                GROUP BY category_expenses.id, category_expenses.name
                ");

                $division = collect($division);

                $categories = array();
                $amounts = array();

                foreach ($division as $key ) {

                array_push($categories, $key->name);

                }


                    foreach ($division as $key ) {

                    array_push($amounts, $key->total);

                    }

                                                        

                    $top6  = DB::table('donations')
                    ->join('members', 'members.id', '=', 'donations.supporter_id')
                    ->select('members.name as name', DB::raw("donations.amount as amount"))
                    ->where('donations.project_id', '=', $id)
                    ->orderBy('amount', 'DESC')
                    ->get()->take(6);

                    $top6 = collect($top6);

                    $top6Name = array();
                    $top6Amount = array();

                    foreach ($top6 as $key ) {

                    array_push($top6Name, $key->name);

                    }


                    foreach ($top6 as $key ) {

                    array_push($top6Amount, $key->amount);

                    }




                        
                        return response()->json([
                            'dates' => $dates,
                            'donations' => $donations,
                            'categories' => $categories,
                            'amounts' => $amounts,
                            'top6amount' => $top6Amount,
                            'top6Name' => $top6Name,
                            'project' => $project
                        
                            

                        ]);
   }



public function getDataDashboard()
{

    try{


                    $projectProgress = \DB::select("
                    SELECT  advance AS progress, name AS name
                    FROM projects 
                    LIMIT 3
                    ");
                    


                $donationsByMonth = \DB::select("
                SELECT  SUM(amount) AS total,CONCAT(monthName(created_at)) AS fecha
                FROM donations 
                Group by fecha
                ORDER BY created_at ASC
                LIMIT 6 
                ");

                $donationsByMonth = collect($donationsByMonth);

                $fechas = array();
                $donations = array();
                
                foreach ($donationsByMonth as $key ) {
                
                array_push($fechas, $key->fecha);
                
                }
                
                
                foreach ($donationsByMonth as $key ) {
                
                array_push($donations, $key->total);
                
                }


                $division =     DB::select(" 
                SELECT Projects.id, Projects.name as name, SUM(donations.amount) AS tot
                FROM  Projects INNER JOIN  donations
                ON Projects.id=donations.project_id
                GROUP BY Projects.id, Projects.name
                ");


                $totalDivisions = array();
                $projects = array();

                foreach ($division as $key ) {

                array_push($totalDivisions, $key->tot);

                }


                foreach ($division as $key ) {

                array_push($projects, $key->name);

                }



                $top3  = DB::table('donations')
                ->join('members', 'members.id', '=', 'donations.supporter_id')
                ->select('members.name as name', DB::raw("donations.amount as amount"))
                ->orderBy('amount', 'DESC')
                ->get()->take(3);

                $top3 = collect($top3);

                $top3Name = array();
                $top3Amount = array();

                foreach ($top3 as $key ) {

                array_push($top3Name, $key->name);

                }


                foreach ($top3 as $key ) {

                array_push($top3Amount, $key->amount);

                }



                    return response()->json([
                        'fechas' => $fechas,
                        'donations' => $donations,
                        'totalDivisions' => $totalDivisions,
                        'projects' => $projects,
                        'top3Name' => $top3Name,
                        'top3Amount' => $top3Amount,
                        'projectProgress' => $projectProgress
                        

                    ]);




       }catch(\Exception $e){

        $messageError = "Someting is worng: ".$e->getMessage();
           return $messageError;
    }






}



public function activity($id)
{
    $activityLogs = ActivityLog::orderBy('id', 'ASC')->withTrashed()->get();
$project= Project::where('id',$id)->first();



return view ('activity_logs.index', compact('activityLogs' ,'project'));
}

    public function show($id)
    {
 
                    

                    $project = Project::findOrFail($id);
                    //return Storage::download('public\3\planning.pdf');

                    $donations = Donation::get();
                    $top = $project->topDonations();

                    return view('projects.show', compact('project', 'donations','top'));

                    }
                    public function create()
                    {
                        return view('projects.create');
                    }

                    public function donation()
                    {
                        
                        return view('projects.donation');
                    }
                    public function downloadPlanning($id){
                        $project = Project::where('id', $id)->first();
                        return Storage::download($project->planning);


                    }

                    public function donar($id){
                        
                        $project = Project::where('id', $id)->first();
                        $member='';
                        return view('donations.create', compact('project','member'));
                    }

                    public function investment($id){
                        $project = Project::where('id', $id)->first();
                        return view('investments.create', compact('project'));
                    }

                    public function donate(Request $request)
                    {

                        $data = $this->validate(request(), [
                            //             'name' => 'required|min:2|max:244',
                            //             'last_name' => 'required|min:2|max:244',
                            'supporter_id' => 'required|nullable',
                            'project_id' => 'required|nullable',
                            'amount' => 'required|numeric|nullable',
                            'amount.numeric' => 'No mames',
                            
                            ]);
                                if ($validator->fails()) {
                                        // return redirect('post/create')
                                        //             ->withErrors($validator)
                                        //             ->withInput();
                                                    return \Redirect::back()->withInput()->withErrors($validator);
                            
                                    }
                            
                                    try{
                            
                                        $donation = new donation($request->all());
                                        $donation->save();
                            
                                    }catch(\Exception $e){
                            
                                        $messageError = "Someting is worng: ".$e->getMessage();
                                        \Session::flash('error',$messageError);
                                        return \Redirect::back()->withInput()->withErrors($messageError);
                                        }
                            
                                        $message ='Donacion guardada con exito';
                                        \Session::flash('message',$message);
                                        return redirect()->route('projects.index');
                    }
                    public function store(Request $request)
                    { 
                        $data = $this->validate(request(), [
                            'name' => 'required|min:2|max:244',
                        //  "planning" => "required|mimes:pdf|max:10000",

                            'description' => 'required|min:5|max:244' ]);
                        try{
                        // $name = $request->file('planning')->getClientOriginalName();
                    //$visibility = Storage::getVisibility('file.jpg');

                    //return Storage::download('public\3\planning.pdf');

                            $project = new Project($request->all());
                            $project->save();
                            $project->planning ='public/'.$project->id.'/planning.pdf';
                            $project->save();

                            $request->planning->storeAS('public/'.$project->id, '/planning.pdf');

                            }catch(\Exception $e){

                            $messageError = "Someting is worng: ".$e->getMessage();
                            \Session::flash('error',$messageError);
                            return \Redirect::back()->withInput()->withErrors($messageError);
                            }

                            $message ='The project was created!.';
                            \Session::flash('message',$message);
                                return redirect()->route('projects.index');
   }


   public function edit($id)
   {
           $project = Project::findOrFail($id);
           return view('projects.edit', compact('project'));
   }


   public function update(Request $request,$id)
   {
    $data = $this->validate(request(), [
       'name' => 'required|min:2|max:244',
       'description' => 'required|min:5|max:244',
      // "planning" => "required|mimes:pdf|max:10000",
       'cost' => "numeric"


 ]);
   try{
           $project= Project::findOrFail($id);
       $project->fill($request->all());


       if ($request->hasFile('planning')) {

       $project->planning = 'public/'.$project->id.'/planning.pdf';
              $request->planning->storeAS('public/'.$project->id, '/planning.pdf');

       }
       if ($request->hasFile('photo')) {

  
        $imageName = $project->id.'.'.request()->photo->getClientOriginalExtension();


        request()->photo->move(public_path('images/projects'), $imageName);

                $project->photo= '/images/projects/'.$imageName;

       }

 
 

       $project->save();




       }catch(\Exception $e){

           $messageError = "Someting is worng: ".$e->getMessage();
           \Session::flash('error',$messageError);
           return \Redirect::back()->withInput()->withErrors($messageError);
           }
       $message ='project updated! ';
        \Session::flash('message',$message);
       return redirect()->route('projects.index');
   }



   public function destroy($id)
{

$item = Project::findOrFail($id);

if($item->status){
$item->status = 0;
$message="project inactive";
}
else{

$item->status = 1;
$message ="project active";

}

$item->save();
       \Session::flash('message',$message);

return back()->with('success', $message);

}



  
   



  
}
