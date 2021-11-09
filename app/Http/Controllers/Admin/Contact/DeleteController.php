<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(ContactMessage $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contact.index');
    }
}
