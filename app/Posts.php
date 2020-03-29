<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable =[
        'author','title','subtitle'
    ];

    protected $table = 'tbl_posts';
}
