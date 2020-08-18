<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\User;
use App\Plan;


class HomeController extends Controller
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
        
        $user_id=Auth()->user()->id;
        $user=user::find($user_id);
       

        return view('home')->with('plan',$user->plans);
   
    }
    public function index1()
    {
        
        $user_id=Auth()->user()->id;
        $user=user::find($user_id);
       

        return view('home1')->with('plan',$user->healthplans);
   
    }
}
