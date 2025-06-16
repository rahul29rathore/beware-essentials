<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use DB;
use App\Models\Category;
use App\blogsModel;
class Helper
{
    public static function allcate()
    {
        $allcate  =  Category::where('parent_id',null)->get();

       // $allcate =  Category::orderBy('name', 'asc')->get();
        return $allcate;
    }


    public function showblogs()
    {

        $blogs = blogsModel::take(12)->orderBy('id', 'DESC')->get();
        return $blogs;
    }

}