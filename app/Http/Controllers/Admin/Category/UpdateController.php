<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $req, Category $category)
    {
        $data = $req->validated();
        $category->update($data);

        return redirect()->route('admin.category.index');
    }
}
