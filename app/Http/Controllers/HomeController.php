<?php

namespace App\Http\Controllers;

use App\Models\Framework; // Assure-toi de bien importer le modèle Framework
use Illuminate\Http\Request;

class HomeController extends Controller
{
     /**
     * Affiche la page de blog avec les frameworks.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Récupère tous les frameworks depuis la base de données
        $frameworks = Framework::all();

        // Retourne la vue avec les frameworks
        return view('home', compact('frameworks'));
    }
}
