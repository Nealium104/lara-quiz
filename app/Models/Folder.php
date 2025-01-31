<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $fillable = ['title'];

    function quiz() {
        return $this->hasMany(Quiz::class);
    }
}
