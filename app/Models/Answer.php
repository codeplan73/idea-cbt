<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(Student::class, 'stud_id');
    }

    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['examId']) && isset($filters['class'])) {
            $query->where('title', $filters['examId'])
                ->where('class', $filters['class']);
        }
    } 
}