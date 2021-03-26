<?php

namespace App;
use App\Member;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Project extends Model
{    use SoftDeletes;

    //
    protected $fillable = [

        'name','cost','description', 'director_id' ,'treasure_id','secretary_id' ,'account_id','planning', 'advance'
            ];

            public function donations()
            {
                return $this->hasMany('App\Donation');

                
            }

            public function investments()
            {
                return $this->hasMany('App\Investment');
            }
           
            public function supporters()
            {
                return $this->hasMany('App\Member');
            }

            
              public function accounts()
            {
                return $this->hasMany('App\Models\Account');
            }


            public function director()
            {
                return $this->belongsTo('App\Member');
            }

            public function treasure()
            {
              
                return $this->belongsTo('App\Member');

                   
            }

            public function secretary()
            {
                return $this->belongsTo('App\Member');
            }

            public function account()
            {
                return $this->belongsTo('App\Models\Account');
            }

            public function topDonations()
            {
               return $topDonations = Donation::where('project_id', $this->id)
                ->orderBy('amount', 'desc')
                ->take(3)
                ->get();

                 
            }

            
}
