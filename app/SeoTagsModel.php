<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class SeoTagsModel extends Model implements HasMedia
{

    use HasMediaTrait;

    protected $table = "seotags";

    protected $fillable = [
        'id',
        'name',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'other',
        'content',
        'updated_person_name',
        'updated_person_email',
        'updated_at',
        'created_at'
    ];


    public function getProductImageUrlAttribute()
    {
        return optional($this->getMedia('seotags')->first())->getUrl();
    }
    
}
  