<?php

namespace App\Http\Controllers;

use App\Models\Formation;

class StudentDashboardController extends Controller
{
    public function index()
    {
        $formations = Formation::with('courses.resources', 'courses.schedules', 'instructors')->get();
        return view('espace-etudiant', compact('formations'));
    }
}

