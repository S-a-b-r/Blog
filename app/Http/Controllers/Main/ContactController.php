<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;

class ContactController extends Controller
{
    public function __invoke()
    {
        return view('main.contact');
    }
}
