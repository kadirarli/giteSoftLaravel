<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Http\Requests\FilmRequest;

class FilmController extends Controller
{
    public function index()
    {
        return Film::all();
    }

    public function show(Film $film)
    {
        return $film;
    }

    public function create()
    {
        //return view('filmCreate');
    }

    public function store(FilmRequest $request)
    {
        $film = Film::create($request->all());

        return response()->json($film, 201);
    }

    public function update(Request $request, Film $film)
    {
        $film->update($request->all());

        return response()->json($film, 200);
    }

    public function delete(Film $film)
    {
        $film->delete();

        return response()->json(null, 204);
    }
}
