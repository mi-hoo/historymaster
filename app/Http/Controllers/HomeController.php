<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
   public function index()
   {
       
       if(Auth::check())
        return redirect('admin/index');
       else
        return view('welcome');
       
   }
   
   public function input()
    {
        return view('contact/input');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'title' => 'required',
            'body'  => 'required',
        ]);
        
        $inputs = $request->all();
        
        return view('contact/confirm', [
            'inputs' => $inputs,
        ]);
    }

    public function send(Request $request)
    {
    }
    
}