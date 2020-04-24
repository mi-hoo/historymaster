<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Unit;

class QuestionController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function question()
    {
        return view('question');
    }
   
    public function title()
    {
        $unit = Unit::all();

        return view('index',compact('unit'));
    }
    
    public function open()
    {
        return view('question');
    }
    
}