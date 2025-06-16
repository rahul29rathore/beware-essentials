<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DistributerModel extends Model
{
    //

    protected $table = 'distributers';
    protected $fillable = [
        'name', 'email' ,'phone' ,'company','location','Gst'
    ];
}
