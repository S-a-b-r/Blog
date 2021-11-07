<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ContactMessage;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ResetController extends Controller
{
    public function __invoke($password)
    {
        if($password == 'admin'){
            Artisan::call('migrate:fresh --seed');
            return redirect()->route('blog.main')->with('success','Проект сброшен в первоначальное состояние');
        }
        return abort(404);
    }
}
