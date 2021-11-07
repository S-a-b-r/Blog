<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $req)
    {
        $query = Post::query();

        if(isset($req)){
            switch ($req->input('sorted')){
                case 0: $query->orderBy('created_at', 'DESC');break;
                case 1: $query->orderBy('created_at', 'ASC'); break;
                case 2: {
                    $query->withCount('likedUsers')->orderBy('liked_users_count', 'DESC'); break;
                }
                case 3: {
                    $query->withCount('likedUsers')->orderBy('liked_users_count', 'ASC'); break;
                }
            }
        }


        $tags = $req->validate(['tags_id'=> 'nullable|array', 'tags_id.*'=> 'nullable|exists:tags,id' ]);
        if(count($tags)>0){
            $tags = $tags['tags_id'];
            $postTag = PostTag::all();
            $postsOut = [];
            foreach ($postTag as $item) {
                if(in_array($item->tag_id, $tags)){
//                    $post1 = Post::where('id',$item->post_id)->get();
                    $query->orwhere('id',$item->post_id);
//                    dd($post1);
//                    $postOut[] = Post::where('id',$item->post_id)->get();
                }
            }

        }

        if($req->input('category') != 0){
            $query->where('category_id',$req->input('category'));
        }

        $posts = $query->paginate(10);


//        $posts = Post::orderBy('created_at', 'DESC')->get()->take(5);
        $tags = Tag::all();
        $categories = Category::all();
        return view('main.index',compact('posts', 'tags', 'categories'));
    }
}
