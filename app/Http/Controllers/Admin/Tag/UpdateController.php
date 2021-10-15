<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $req, Tag $tag)
    {
        $data = $req->validated();
        $tag->update($data);

        return redirect()->route('admin.tag.index');
    }
}
