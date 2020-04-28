<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function units()
    {
        return $this->belongsTo(Unit::class);
    }
}
