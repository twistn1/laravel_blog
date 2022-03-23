<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use App\Models\Tag;
use function dd;

class DeleteController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tag.index');
    }
}
