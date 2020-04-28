<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Unit;
use App\Question;
use App\Choice;

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
    
    public function open(Request $request)
    {
        $unit = Unit::find($request->id);
        $questions = Question::all();
        $choices = Choice::all();
    
        return view('question',['unit' => $unit,'questions' => $questions,'choices' => $choices]);
    }
}