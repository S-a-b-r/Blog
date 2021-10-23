<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\comment\UpdateRequest;
use App\Models\Comment;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $req, Comment $comment)
    {

        $data = $req->validated();
        $comment->update($data);



        return redirect()->route('personal.comment.index');
    }
}
