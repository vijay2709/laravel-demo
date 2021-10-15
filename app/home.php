<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    protected $table = 'demotest';
    protected $fillable = [
        'name', 'email', 'password','cpassword'
    ];
}
