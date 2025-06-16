<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $table    = 'leads';
    protected $fillable = [
		'name','email','contact_no',
		'subject','message', 'product_id',
		'product_name','lead_type',
        'customer_type'
	];
	
	public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}