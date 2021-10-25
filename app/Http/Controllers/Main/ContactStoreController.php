<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Contact\StoreRequest;
use App\Models\ContactMessage;

class ContactStoreController extends Controller
{
    public function __invoke(StoreRequest $req)
    {
        $data = $req->validated();
        ContactMessage::create($data);
        return redirect()->route('blog.contact')->with('success','The message was successfully delivered. Expect a reply to the mail');
    }
}
