<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Mail\Contact\AnswerMail;
use App\Mail\User\PasswordMail;
use App\Models\Category;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendController extends Controller
{
    public function __invoke(Request $req, ContactMessage $contact)
    {
        Mail::to($contact['email'])->send(new AnswerMail($req->input('answer'), $contact['name'], $contact['content']));//отправляем письмо с паролем
        return redirect()->route('admin.contact.index');
    }
}
