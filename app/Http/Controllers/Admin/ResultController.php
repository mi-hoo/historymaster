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
        
        unset($form['_token']);
        
        $incorrect = new Incorrect;
        $choices = Choice::whereIn('id',$form)->get();
        
        dd($choices);
        
        
        if($choices->is_answer == 0) {
            $incorrect->fill($choices->question_id);
            $incorrect->save();
        }
        
        return view('result',['choices' => $choices]);
    }
}
