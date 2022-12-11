<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuizController extends Controller
{
    public function index()
    {
        // Récupérer une question aléatoire de la base de données
        $question = Question::inRandomOrder()->first();

        // Afficher la vue avec la question et les réponses possibles
        return view('quiz.index', compact('question'));
    }

    public function checkAnswer(Request $request)
    {
        $question = Question::findOrFail($request->question_id);
    
        $correct = $request->answer === $question->correct_answer;
    
        return view('quiz.result', compact('question', 'correct'));
    }
}