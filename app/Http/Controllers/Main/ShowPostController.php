<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class ShowPostController extends Controller
{
    public function __invoke(Post $post)
    {
        $date = Carbon::parse($post['created_at']);
        return view('main.post',compact('post','date'));
    }
}
