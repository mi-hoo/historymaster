<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Incorrect extends Pivot
{
    protected $table = 'incorrects';
    
   public function questions()
    {
        return $this->belongsTo(Question::class);
    }
    
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
