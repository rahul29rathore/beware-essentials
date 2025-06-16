<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\blogsModel;
<<<<<<< HEAD
use App\Http\Livewire\Admin\seotags\seotags;
use App\SeoTagsModel;
=======
>>>>>>> Rudraa

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD

        return view('livewire.admin.blogs.index');
=======
        //
          return view('livewire.admin.blogs.index');
>>>>>>> Rudraa
    }

    public function allblogs()
    {
        $blogs = blogsModel::orderBy('id', 'DESC')->get();
<<<<<<< HEAD
        $seotags = SeoTagsModel::where("slug", "blogs")->first();

        return view('pages.blog', compact('blogs', 'seotags'));
    }


    public function blogdetail($slug)
    {

        $blog = blogsModel::where('slug', $slug)->get();
        //dd($blog);

        return view('pages.blog-detail', compact('blog'));
=======
         return view('pages.blog',compact('blogs'));
    }


    public function blogdetail($id)
    {

         $blog = blogsModel::where('id',$id)->get();

        //dd($blog);

         return view('pages.blog-detail',compact('blog'));

>>>>>>> Rudraa
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // echo "sdf";
        // die;
        return view('admin.blogs.create-or-update');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function show(blogs $blogs)
    {
        //
        return view('admin.blogs._product-info', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('admin.blogs.create-or-update', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blogs $blogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(blogs $blogs)
    {
        //
    }
}
