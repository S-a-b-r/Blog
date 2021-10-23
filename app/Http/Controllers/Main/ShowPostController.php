<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;

class ShowPostController extends Controller
{
    public function __invoke(Post $post)
    {
        return view('main.post',compact('post'));
    }
}
