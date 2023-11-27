<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentTerm extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = ['Current_Term', 'Current_Session', 'Branch'];

    protected $table = 'current_term';
}
