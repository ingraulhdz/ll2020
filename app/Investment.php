<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Investment extends Model
{    use SoftDeletes;
    use HasFactory;

    //
    protected $fillable = [

        'description','name','amount', 'project_id','category_id', 'voucher'

            ];

            public function project()
            {
                return $this->belongsTo('App\Project');
            }

            public function category(){
                return $this->belongsTo('App\CategoryExpense');

            }

            
              public function accounts()
            {
                return $this->hasMany('App\Account');
            }


}
