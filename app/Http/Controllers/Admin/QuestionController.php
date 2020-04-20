<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}