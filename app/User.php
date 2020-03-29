<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $fillable = [
        'name','email','password',
    ];

    protected $table = 'tbl_users';
}
