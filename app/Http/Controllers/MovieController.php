<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;




class MovieController extends Controller
{
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return Inertia::render('Welcome', compact('movie'));
    }

    //Vérifies si le guess de l'utilisateur est correct
    public function guessMovie(Request $request)
    {
        $userGuess = $request->input('name');

        // Recherche si ce nom existe
        $movie = Movie::where('name', $userGuess)->first();

        if ($movie) {
            // Le guess est bon
            return response()->json(['success' => true, 'message' => 'Bonne réponse !']);
            //Suite de la logique en affichant un pop up de reussite
            //Suite de la logique pour ajouter le score à la table de score en fonction du nombres d'essais
        } else {
            // le guess n'est pas bon (le guez du coup)
            return response()->json(['success' => false, 'message' => 'Mauvaise réponse, essayez à nouveau.']);
            //Suite de la logique en executant la fonction prochaine citation
        }
    }

    //affiché la citation suivante, si plus de citation suivante alors echec
    public function nextCitation()
    {

    }
}
