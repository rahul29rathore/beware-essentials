<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\SeoTagsModel;
=======
>>>>>>> Rudraa
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
<<<<<<< HEAD
    public function __construct() {}
=======
    public function __construct()
    {
    }
>>>>>>> Rudraa

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($slug)
    {
<<<<<<< HEAD
        $seotags = SeoTagsModel::where("slug", $slug)->first();
        return view('pages.' . $slug, compact('seotags'));
    }
}
=======
        return view('pages.'.$slug);
    }
}
>>>>>>> Rudraa
