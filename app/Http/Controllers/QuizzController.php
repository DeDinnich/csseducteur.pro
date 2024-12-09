<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuizzController extends Controller
{
    /**
     * Affiche la vue de la page de recherche avec une question aléatoire et ses réponses.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Récupère ou initialise le numéro de la question actuelle (par défaut 1)
        $currentQuestionIndex = session('current_question_index', 1);

        // Si l'utilisateur a déjà répondu à 10 questions, redirige vers /results
        if ($currentQuestionIndex > 10) {
            return redirect()->route('results');
        }

        // Sélectionne une question aléatoire avec ses réponses associées
        $question = Question::inRandomOrder()->with('responses')->first();

        // Stocke l'index de la question suivante
        session(['current_question_index' => $currentQuestionIndex + 1]);

        // Passe la question et ses réponses à la vue
        return view('search', compact('question'));
    }

    /**
     * Réinitialise le quizz.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function reset()
    {
        session()->forget('current_question_index');
        return redirect()->route('search');
    }
}