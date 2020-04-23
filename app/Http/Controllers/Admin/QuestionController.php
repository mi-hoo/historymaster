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
        $unit1 = Unit::where('category_id',1)->get();
        return view('index',['unit1' => $unit1]);
        
        $unit2 = Unit::where('category_id',2)->get();
        return view('index',['unit2' => $unit2]);
        
        $unit3 = Unit::where('category_id',3)->get();
        return view('index',['unit3' => $unit3]);
        
        $unit4 = Unit::where('category_id',4)->get();
        return view('index',['unit4' => $unit4]);
        
        $unit5 = Unit::where('category_id',5)->get();
        return view('index',['unit5' => $unit5]);
    }
    
}