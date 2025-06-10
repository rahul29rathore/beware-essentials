<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Admin\seotags\seotags;
use Illuminate\Http\Request;
use App\SeoTagsModel;

class SeoTagsController extends Controller
{
    public function index()
    {
        return view('livewire.admin.seotags.index');
    }

    public function allseotags()
    {
        $seotags = SeoTagsModel::orderBy('id', 'DESC')->get();
        return view('pages.seotags', compact('seotags'));
    }


    public function seotagsdetails($slug)
    {

        $seotags = SeoTagsModel::where('slug', $slug)->get();

        return view('pages.seotags-detail', compact('seotags'));
    }


    public function create()
    {
        return view('admin.seotags.create-or-update');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(seotags $seotags)
    {
        $seotags->load('seotags');

        return view('admin.seotags._seotags-info', compact('seotags'));
    }


    public function edit($id)
    {
        return view('admin.seotags.create-or-update', compact('id'));
    }
}
