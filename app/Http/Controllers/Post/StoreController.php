<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use App\Http\Requests\Post\StoreRequest;
class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        $post = $this->service->store($data);

        if ($post instanceof Post) {
            if ($request->wantsJson() || $request->is('api/*')) {
                return new PostResource($post);
            }
            return redirect()->route('post.index');
        } else {
            return $post;
        }

//        return new PostResource($post);
        //        return redirect()->route('post.index');
    }
}
