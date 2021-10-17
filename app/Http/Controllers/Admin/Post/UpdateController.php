<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $req, Post $post)
    {
        $data = $req->validated();
        $post->update($data);

        return redirect()->route('admin.post.index');
    }
}
