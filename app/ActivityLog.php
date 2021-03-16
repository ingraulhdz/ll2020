<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ActivityLog extends Model
{
    use SoftDeletes;

    use HasFactory;
    protected $filleable =[
'name', 'description' , 'photo' ,'date'
];



}

