<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Unit;
use App\Question;
use App\Choice;

class ResultController extends Controller
{
    public function scoring(Request $request) 
    {
        
        return view('result');
    }
}
