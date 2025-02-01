<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ["folder_id", "title", "description"];
    function index(){
        return Quiz::all();
    }

    public function folder(){
        return $this->belongsTo(Folder::class);
    }
}
