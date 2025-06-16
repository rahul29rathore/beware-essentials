<?php

namespace App\Facade;

use App\Model\SpMedia;
use Spatie\MediaLibrary\PathGenerator\PathGenerator;

class CustomPathGenerator implements PathGenerator
{
    protected $path;

    public function __construct()
    {
        $this->path = '';
    }

    public function getPath($media) : string
    {
		if($media->collection_name != 'default'){
			$this->path .= $media->collection_name.'/';
		}
        return $this->path . $media->id . '/';
    }

    public function getPathForConversions( $media) : string
    {
        return $this->getPath($media) . 'conversions/';
    }
	
	public function getPathForResponsiveImages( $media): string
    {
        return $this->getPath($media).'/cri/';
    }
}