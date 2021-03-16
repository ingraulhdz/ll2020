<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Factories\HasFactory;



class Member extends Model
{    use SoftDeletes;
    use HasFactory;
    //
    protected $fillable = [

        'name','last_name','email','phone','photo'
            ];
            public function fullName(){
                return $this->name .' ' . $this->last_name;
            }
            public function donations()
            {
                return $this->hasMany('App\Donation','supporter_id');
            }


}
