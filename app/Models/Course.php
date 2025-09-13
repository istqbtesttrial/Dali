<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'formation_id',
        'title',
        'description',
    ];

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }

    public function resources()
    {
        return $this->hasMany(Resource::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function instructors()
    {
        return $this->belongsToMany(Instructor::class);
    }
}

