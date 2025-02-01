<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $fillable = ['name', 'description'];

    function quiz() {
        return $this->hasMany(Quiz::class);
    }
}
