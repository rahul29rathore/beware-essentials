<?php

namespace App\Http\Controllers;

use App\SeoTagsModel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($slug)
    {
        $seotags = SeoTagsModel::where("slug", $slug)->first();
        return view('pages.' . $slug, compact('seotags'));
    }
}
