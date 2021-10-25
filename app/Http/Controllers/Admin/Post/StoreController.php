<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $req)
    {

        $data = $req->validated();
        $data['creator_id'] = auth()->user()->id;
        $this->service->store($data);

        return redirect()->route('admin.post.index');
    }
}
