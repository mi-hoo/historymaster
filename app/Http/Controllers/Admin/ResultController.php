<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Unit;
use App\Question;
use App\Choice;
use App\Incorrect;

class ResultController extends Controller
{
    public function scoring(Request $request) 
    {
        $value = $request->input('value');
        $choices = Choice::find($value);
        
        $incorrect = new Incorrect;
        if($choices->is_answer == 0) {
            $incorrect->fill($choices->question_id);
            $incorrect->save();
        }
        
        return view('result',['choices' => $choices]);
    }
}
