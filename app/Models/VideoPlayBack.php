<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoPlayBack extends Model
{
    use HasFactory;

    protected $fillable = [
        'topic',
        'subject',
        'week',
        'class',
        'term',
        'start_date',
        'start_time',
        'video',
        'file_type',
    ];
}
