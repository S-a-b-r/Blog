<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function __invoke(ContactMessage $contact)
    {
        return view('admin.contacts.answer',compact('contact'));
    }
}
