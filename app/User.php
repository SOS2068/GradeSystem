<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['Fname', 'Lname', 'GPA'];

    public function grade(){
        return $this->hasMany(Grade::class);
    }
}