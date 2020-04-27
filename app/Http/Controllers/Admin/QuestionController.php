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
        $categories = Category::all();

        return view('index',['unit' => $unit,'categories' => $categories]);
        
    }
    
    public function open($unit_id)
    {
        $unit = Unit::find($unit_id);
    
        return view('question',['unit' => $unit_3]);
    }
}