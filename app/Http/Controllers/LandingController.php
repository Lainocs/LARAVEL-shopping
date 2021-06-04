<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class LandingController extends Controller
{

    public function index()
    {
        $landings = Article::all();
        return view('landings.index', compact('landings'));
    }

    public function show($id)
    {
        $landings = Article::findOrFail($id);

        return view('landings.show', compact('landings'));
    }
}
