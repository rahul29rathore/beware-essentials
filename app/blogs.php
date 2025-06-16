<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    //

    protected $table = "blogs";

    protected $fillable = [
        'title', 'slug' ,'short_description' ,'auther','tags','description','status'    
    ];
}
