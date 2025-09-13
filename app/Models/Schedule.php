<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'day',
        'time',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}

