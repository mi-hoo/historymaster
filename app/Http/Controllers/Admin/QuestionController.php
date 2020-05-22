<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Unit;
use App\Question;
use App\Choice;
use App\Incorrect;

class QuestionController extends Controller
{
    public function index()
    {
        $incorrect = Incorrect::all;
        dd($incorrect);
        return view('index',['incorrect' => $incorrect]);
    }
    
    public function question()
    {
        return view('question');
    }
   
    public function title()
    {
        $categories = Category::all();
        return view('index',['categories' => $categories]);
    }
    
    public function open(Request $request)
    {
        $unit = Unit::find($request->id);
        $questions = Question::where('unit_id',$request->id)->get();
        $choices = Choice::where('unit_id',$request->id)->get();
        return view('question',['unit' => $unit,'questions' => $questions,'choices' => $choices]);
    }
}