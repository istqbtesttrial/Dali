<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'can:admin']);
    }
    /**
     * Affiche la liste de tous les utilisateurs sauf l'admin (id=1).
     */
    public function index()
    {
        // Récupère tous les users sauf l'admin
        $etudiants = User::where('role', '!=', 'admin')->get();

        // Retourne la vue avec la liste
        return view('etudiants.index', compact('etudiants'));
    }

    /**
     * Supprime un utilisateur sauf l'admin (id=1).
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Vérifie qu'on ne supprime pas l'admin
        if ($user->role === 'admin') {
            return redirect()->back()->with('error', "Impossible de supprimer l'administrateur !");
        }

        $user->delete();

        return redirect()->back()->with('success', 'Utilisateur supprimé avec succès.');
    }
}
