<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Formation;
use App\Models\Suggestion;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard with statistics.
     */
    public function index()
    {
        $userCount = User::where('role', '!=', 'admin')->count();
        $formationCount = Formation::count();
        $suggestionCount = Suggestion::count();

        return view('espace-admin', compact('userCount', 'formationCount', 'suggestionCount'));
    }
}

