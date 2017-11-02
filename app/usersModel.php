<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usersModel extends Model
{
    //
    protected $table = 'users';
    
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
}
