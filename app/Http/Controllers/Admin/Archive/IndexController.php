<?php

namespace App\Http\Controllers\Admin\Archive;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::where('status', Post::STATUS_ARCHIVED)->get();
        return view('admin.archive.index', compact('posts'));
    }
}
