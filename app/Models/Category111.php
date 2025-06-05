<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Illuminate\Database\Eloquent\Builder;

class Category extends Model implements HasMedia
{
	use HasMediaTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $table    = 'categories';
    protected $fillable = ['name', 'slug','parent_id','short_description','tags','status'];
	
	protected static function booted()
    {
        static::addGlobalScope('activeCategory', function (Builder $builder) {
            $builder->where('status', '>', 0);
        });
    }
	
	public function scopeParentCategegories($query)
	{
        $query->where('parent_id', 0)->orWhere('parent_id', null)->orWhere('parent_id', '');
    }
	
	public function scopeNotParentCategegories($query)
	{
        $query->where('parent_id', '>', 0);
    }
	
	public function getRouteKeyName()
	{
		return 'slug';
	}
	
	public function getCategoryImageUrlAttribute()
	{
		return optional($this->getMedia('categories')->first())->getUrl();
	}
	
	public function getImagesAttribute()
	{
		return $this->getMedia('categories');
	}
	
	public function products()
    {
        return $this->hasMany(Product::class,'category_id');
    }
	
	public function categories() {
        return $this->hasMany(Category::class,'parent_id','id');
    }
	
	public static function flattenChilds($parent)
    {
        $result = collect([]);
        foreach ($parent->categories as $child) {
            $result->push($child);
            $result = $result->merge(static::flattenChilds($child));
        }
        return $result->filter();
    }
	
	public static function flattenChildIds($parent)
    {
        $result = collect([]);
		
        foreach ($parent->categories as $child) {
            $result->push($child);
            $result = $result->merge(static::flattenChilds($child));
        }
		
        return array_column($result->filter()->toArray(), 'id', 'id');
    }
	
	public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
	
    

	public function getParentsAttribute()
	{
		$parents = collect([]);
		$parent = $this->parent;

		while(!is_null($parent)) {
			$parents->push($parent);
			$parent = $parent->parent;
		}

		return $parents;
	}
	
	public function getBreadcrub($route = 'products')
	{
		$breadcrub   = [];
		$breadcrub[] = ['link' => route($route, $this->slug), 'title' => $this->name , 'active' => true , 'href' => '<li class="breadcrumb-item active" aria-current="page"><a href="'.route($route, $this->slug).'" class="active">'.( $this->name ).'</a></li>' ];
		$parent      = $this->parent;
		while(!is_null($parent)) {
			array_push($breadcrub, ['link' => route($route, $parent->slug), 'title' => $parent->name, 'active' => false , 'href' => '<li class="breadcrumb-item" aria-current="page"><a href="'.( empty($parent->parent_id) ?  route($route, $parent->slug) :  route($route, $parent->slug) ).'" class="">'.( $parent->name ).'</a></li>']);
			$parent = $parent->parent;
		}
		
		return implode('', array_column(array_reverse($breadcrub), 'href'));
	}
}