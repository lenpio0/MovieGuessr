<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;




class MovieController extends Controller
{
    public function show($id)
    {
        // $movie = Movie::findOrFail($id);
        $movie = $this->fetchMovies();
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

    private function fetchMovies()
    {
        $apiKey = '45ed43039702d6289093272380b830cc';
        $url = 'https://api.themoviedb.org/3/movie/popular';

        $response = Http::get($url, [
            'api_key' => $apiKey,
            // You can add more parameters if needed
        ]);

        if ($response->successful()) {
             $movies = $response->json()['results'];
            $movieNames = array_column($movies, 'title');
            return $movieNames;
        } else {
            // Handle unsuccessful response
            abort(500, 'Failed to fetch movies from TMDB API');
        }
    }
}
