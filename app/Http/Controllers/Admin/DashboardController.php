<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DistributerModel;
use App\CarrerModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('livewire.admin.users.index');
    }

    public function distributer()
    {
        // echo "dsf";
        // die;
        $distributers = DistributerModel::orderBy('id', 'DESC')->get();
        return view('admin.distributer',compact('distributers'));
    }

    public function carrers()
    {

        $carrers = CarrerModel::orderBy('id', 'DESC')->get();
        return view('admin.carrers',compact('carrers'));
    }
    
}
