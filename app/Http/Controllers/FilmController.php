<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Http\Requests\FilmRequest;

class FilmController extends Controller
{

    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function index()
    {
        $films = Film::all();
        if ($this->request->isJson()){
            return $films;
        }
        return view('films', array('films' => $films));
    }

    public function show(Film $film)
    {
        if ($this->request->isJson()){
            return $film;
        }
        return view('film',array('film' => $film));
    }

    public function create()
    {
        //return view('film');
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
