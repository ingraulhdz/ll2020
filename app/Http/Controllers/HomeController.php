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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        $project = Project::find(2);


        return view('webpage.welcome', compact('project'));
    }

    public function index()
    {
        return view('home');
    }


    
   public function home()
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
    SELECT projects.id, projects.name, SUM(donations.amount) AS TOTALAMOUNT
    FROM  projects INNER JOIN  donations
    ON projects.id=donations.project_id
    GROUP BY projects.id, projects.name
");
   


    
    $projects = Project::orderBy('id', 'ASC')->get();


       return view('home', compact('projects','members','donations','investments'));
   }





}
