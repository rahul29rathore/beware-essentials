<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use App\Models\Category;

class blogsModel extends Model implements HasMedia
{
    
    use HasMediaTrait;

    protected $table = "blogs";

    protected $fillable = [
       'category_id','title', 'slug' ,'short_description' ,'auther','tags','description','status'    
    ];


    public function getProductImageUrlAttribute()
    {
        return optional($this->getMedia('blogs')->first())->getUrl();
    }
    
    // public function getImagesAttribute()
    // {
    //     return $this->getMedia('product-images');
    // }
    
  
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    
    // public function product_type()
    // {
    //     return $this->belongsTo(ProductType::class, 'product_type_id');
    // }
}
