<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Formation;
use App\Models\Course;
use App\Models\Resource;
use App\Models\Schedule;
use App\Models\Instructor;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $formation = Formation::firstOrCreate([
            'niveau' => 'Licence',
            'specialite' => 'Informatique',
            'description' => 'Programme informatique',
        ]);

        $course = $formation->courses()->create([
            'title' => 'Programmation PHP',
            'description' => 'Introduction à Laravel',
        ]);

        $instructor = Instructor::firstOrCreate([
            'name' => 'John Doe',
            'contact' => 'john@example.com',
        ]);

        $course->instructors()->attach($instructor);

        $course->resources()->create([
            'type' => 'pdf',
            'url' => 'http://example.com/intro.pdf',
        ]);

        $course->schedules()->create([
            'day' => 'Lundi',
            'time' => '09:00',
        ]);

        // link instructor to formation
        $formation->instructors()->attach($instructor);
    }
}

