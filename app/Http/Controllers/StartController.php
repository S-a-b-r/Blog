<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function  index(){
        $user = User::get();
        dd($user);
    }
}
