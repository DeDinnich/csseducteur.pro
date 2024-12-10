<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Framework;
use Illuminate\Support\Facades\Log;

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
        log::info('frameworks', $frameworks);

        // Retourne la vue avec les frameworks
        return view('blog', compact('frameworks'));
    }
}