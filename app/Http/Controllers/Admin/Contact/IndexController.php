<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $contacts = ContactMessage::all();
        return view('admin.contacts.index', compact('contacts'));
    }
}
