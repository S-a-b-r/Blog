<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::where('status','0')->orWhere('status', '1')->get();
        return view('admin.posts.index', compact('posts'));
    }
}
