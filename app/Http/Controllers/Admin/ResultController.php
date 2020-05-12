<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Unit;
use App\Question;
use App\Choice;
use App\Incorrect;
use Auth;
use Redirect;

class ResultController extends Controller
{
    public function scoring(Request $request) 
    {
        
       $form = $request->all();
       unset($form['_token']);
       if (count($form) < 10)
        return Redirect::back()
                  ->withInput()
                  ->withErrors(array('question_id' => 'error'));
        
        
        $choices = Choice::whereIn('id',$form)->get();
        
        foreach($choices as $choice) {
        $record = Incorrect::where('question_id',$choice->question_id)->where('user_id',Auth::id())->first();
        if($record != null)
        $record->delete();
        
        if($choice->is_answer == 0) {
            $incorrect = new Incorrect;
            $incorrect->question_id = $choice->question_id;
            $incorrect->user_id = Auth::id();
            $incorrect->save();
        }
        
        }
        return view('result',['choices' => $choices , 'unit' => $choices[0]->question->unit]);
    }
}

