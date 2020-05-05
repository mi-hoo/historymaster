<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function units()
    {
        return $this->belongsTo(Unit::class);
    }
    
    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
    
    public function incorrects()
    {
        return $this->hasMany(Incorrect::class);
    }
}
