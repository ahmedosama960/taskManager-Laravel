<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    protected $fillable = [

        'name', 'description', 'developer',

    ];

    protected $attributes=[

        'completed'=> false,

    ];
}
