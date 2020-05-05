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
        $result = $request->all();
        $choices = Choice::find($result->choice_id);
        $questions = Question::find($result->question_id);
        
        $incorrect = new Incorrect;
        if($choice->is_answer == 0) {
            $incorrect->fill($choice->question_id);
            $incorrect->save();
        }
        
        return view('result',['questions' => $questions,'choices' => $choices]);
    }
}
