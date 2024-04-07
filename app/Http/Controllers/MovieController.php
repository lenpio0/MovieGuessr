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
}
