<?php


namespace App\Services;


use App\Http\Resources\PostCollection;
use App\Models\Post;

class BlogService
{
    public function listPosts()
    {
        return cache()->remember('blog.index', 3600, function () {
            return Post::with('user')->orderBy('id', 'desc')->paginate(10);
        });
    }

    public function get($id)
    {
        return cache()->remember("blog.post.{$id}", 3600, function () use ($id) {
            return Post::with('user')->find($id);
        });
    }
}
