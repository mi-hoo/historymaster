<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
