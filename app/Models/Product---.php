<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use App\Models\Category;

class Product extends Model implements HasMedia
{
	use HasMediaTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $table    = 'products';
    protected $fillable = [
		'name','category_id','subcatagory_id','product_type_id','slug',
		'short_description','detail','tags','featured','new_arrivals','link','product_specifications'
	];
	
	protected $casts   = [
		'product_specifications' => 'array',
	];

	public static function search($filters)
	{

		return empty($filters) ? static::query() :
			static::where(function ($q) use ($filters) {
					$q->when(!empty($filters['categories']), function($query) use ($filters) {
						//$filters['categories'] = array_filter($filters['categories'], function ($value) { return (int) $value;});
						
						$query->whereIn('category_id', $filters['categories'] ?? [])
						->orWhereIn('subcatagory_id', $filters['categories']);
						
					});
				});
				
    }
	
	public function getProductImageUrlAttribute()
	{
		return optional($this->getMedia('products')->first())->getUrl();
	}
	
	public function getImagesAttribute()
	{
		return $this->getMedia('product-images');
	}
	
	public function getMediaBrochureAttribute()
	{
		return $this->getMedia('product-brochures')->first();
	}
	
	public function getBrochureUrlAttribute()
	{
		return optional($this->getMedia('product-brochures')->first())->getUrl();
	}
	
	public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
	
	public function product_type()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }
}
