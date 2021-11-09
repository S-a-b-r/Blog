<?php

namespace App\Http\Controllers\Admin\Comment;

use App\Http\Controllers\Controller;
use App\Mail\Contact\AnswerMail;
use App\Mail\User\PasswordMail;
use App\Models\Category;
use App\Models\Comment;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApproveController extends Controller
{
    public function __invoke(Request $req, Comment $comment)
    {
        $comment->setAttribute('status','1');
        $comment->update();

        return redirect()->route('admin.comment.index');
    }
}
