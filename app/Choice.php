<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    
    public static $rules = array(
    'question_id' => 'required',
    );  
}
