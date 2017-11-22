<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Comment;
use App\Film;

class CommentController extends Controller
{
    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function store(CommentRequest $request)
    {

        $inputs = $request->all();
        $film = Film::where('slug', $inputs['film_slug'])->firstOrFail();
        $inputs['film_id'] = $film->id;
        unset($inputs['film_slug']);

        $comment = Comment::create($inputs);

        if ($this->request->isJson()){
            return response()->json($comment, 201);
        }

        $message = "Comment Saved";

        return view('film',array('film' => $film, 'message' => $message));

    }
}
