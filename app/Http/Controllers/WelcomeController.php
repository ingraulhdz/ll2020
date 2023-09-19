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

class WelcomeController extends Controller
{
    
    public function welcome()
    {
        $project = Project::find(2);


        return view('webpage.welcome', compact('project'));
    }

}
