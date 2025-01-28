<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    function index(){
        return Quiz::all();
    }

    public function folder(){
        return $this->belongsTo(Folder::class);
    }
}
