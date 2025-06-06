<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $table    = 'settings';
    protected $fillable = ['key','value','group'];
	
}