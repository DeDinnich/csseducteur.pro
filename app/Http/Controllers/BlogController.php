<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Framework;

class BlogController extends Controller
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
        return view('blog', compact('frameworks'));
    }
}