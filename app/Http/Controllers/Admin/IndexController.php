<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ContactMessage;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['users_count'] = User::all()->count();
        $data['posts_count'] = Post::all()->count();
        $data['categories_count'] = Category::all()->count();
        $data['tags_count'] = Tag::all()->count();
        $data['contacts_count'] = ContactMessage::all()->count();

        return view('admin.main.index', compact('data'));
    }
}
