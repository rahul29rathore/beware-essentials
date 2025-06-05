<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class CarrerModel extends Model implements HasMedia
{
    use HasMediaTrait;
    //

    protected $table = 'carrers';
    protected $fillable = [
        'name','email', 'phone'  ,'message'
    ];




    public function getProductImageUrlAttribute()
    {
        return optional($this->getMedia('resume')->first())->getUrl();
    }
    
    public function getImagesAttribute()
    {
        return $this->getMedia('resume');
    }
    
    // public function getMediaBrochureAttribute()
    // {
    //     return $this->getMedia('resume')->first();
    // }
    
    // public function getBrochureUrlAttribute()
    // {
    //     return optional($this->getMedia('resume')->first())->getUrl();
    // }
}
