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
        $form = $request->all();
        $answer1 = $form['1'];
        $answer2 = $form['2'];
        $answer3 = $form['3'];
        $answer4 = $form['4'];
        $answer5 = $form['5'];
        $answer6 = $form['6'];
        $answer7 = $form['7'];
        $answer8 = $form['8'];
        $answer9 = $form['9'];
        $answer10 = $form['10'];
        
        $answers = array('$answer1','$answer2','$answer3','$answer4','$answer5','$answer6','$answer7','$answer8','$answer9','$answer10');
        
        $incorrect = new Incorrect;
        $choices = Choice::find($answers);
        
        if($choices->is_answer == 0) {
            $incorrect->fill($choices->question_id);
            $incorrect->save();
        }
        
        return view('result',['ansewers' => $ansewers]);
    }
}
