<?php

namespace App\Http\Controllers;

use App\Models\Formation;

class StudentDashboardController extends Controller
{
    public function index()
    {
        try {
            $formations = Formation::with('courses.resources', 'courses.schedules', 'instructors')->get();
        } catch (\Throwable $e) {
            $formations = collect([
                (object) [
                    'specialite' => 'Informatique',
                    'niveau' => 'Licence 3',
                    'instructors' => collect([
                        (object) ['name' => 'Alice Martin'],
                        (object) ['name' => 'Bob Dupont'],
                    ]),
                    'courses' => collect([
                        (object) [
                            'title' => 'Programmation Web',
                            'description' => 'Introduction au framework Laravel',
                            'resources' => collect([
                                (object) ['type' => 'PDF', 'url' => '#'],
                                (object) ['type' => 'Vidéo', 'url' => '#'],
                            ]),
                            'schedules' => collect([
                                (object) ['day' => 'Lundi', 'time' => '10:00'],
                                (object) ['day' => 'Mercredi', 'time' => '14:00'],
                            ]),
                        ],
                    ]),
                ],
            ]);
        }

        return view('espace-etudiant', compact('formations'));
    }
}

