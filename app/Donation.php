<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Donation extends Model
{    use SoftDeletes;
    use HasFactory;

    //
    protected $fillable = [

        'supporter_id','project_id','amount', 'voucher', 'date'
            ];

 public function currency()
    { 
        
        if($this->account->country == 'USA' ){
               
        return 'USD';
    }

        if($this->account->country == 'MX' ){
               
        return 'MXN';
    }


    }

            public function supporter()
    {
        return $this->belongsTo('App\Member');
    }
    

             public function account()
    {
        return $this->belongsTo('App\Models\Account');
    }
    


    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    
   

}
