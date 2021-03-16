<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Account extends Model
{    use SoftDeletes;

    //
    protected $fillable = [

        'owner','route_number','account_number', 'card', 'bank','status'. 'country', 'app', 'email', 'phone'
            ];

}
