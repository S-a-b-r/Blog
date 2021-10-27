<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $req, Post $post)
    {
        $data = $req->validated();
        $data['post_id'] = $post->id;
        $data['user_id'] = auth()->user()->id;
        Comment::create($data);
        return redirect()->route('blog.show', $post)->with('success','The comment was successfully left');
    }
}
