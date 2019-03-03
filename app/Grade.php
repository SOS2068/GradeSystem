<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['subject', 'grade', 'credit'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
