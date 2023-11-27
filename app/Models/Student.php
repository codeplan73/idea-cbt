<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable

{
    use HasFactory;

    protected $table = 'students';

    protected $guarded = [];

    public function answers()
    {
        return $this->hasMany(Answer::class, 'stud_id');
    }

    public function results()
    {
        return $this->hasMany(Result::class, 'stud_id');
    }
}