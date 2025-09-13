<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Instructor;

class InstructorSeeder extends Seeder
{
    public function run(): void
    {
        Instructor::create([
            'name' => 'John Doe',
            'contact' => 'john@example.com',
        ]);
    }
}

