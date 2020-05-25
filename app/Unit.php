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
    
    public function incorrects()
    {
        return $this->hasMany(Incorrect::class);
    }
    
    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
    
    public function users()
    {
        return $this->belongsToMany('App\User')->using('App\Incorrect');
    }
}
