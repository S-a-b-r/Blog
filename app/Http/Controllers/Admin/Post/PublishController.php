<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PublishController extends BaseController
{
    public function __invoke(Post $post)
    {
        $post->setAttribute('status', Post::STATUS_PUBLICHED);
        $post->update();

        return redirect()->route('admin.post.index');
    }
}
