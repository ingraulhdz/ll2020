<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CategoryExpense extends Model
{    use SoftDeletes;

    //
        //protected $table = 'cliente';

        protected $fillable = [

            'name','status','description'
                ];
            
            }
