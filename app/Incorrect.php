<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Incorrect extends Pivot
{
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
        return $this->hasMany(User::class);
    }
}
