<?php


namespace App\Services;


use App\Http\Resources\PostCollection;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class BlogService
{
    public function listPosts()
    {
        $page = request()->get('page', 1);

        /**
         * Don't need to cache
         */
        if($page > 3) {
            return $this->getListedPosts();
        }

        return cache()->remember('blog.index.'.$page, 3600, function () {
            return $this->getListedPosts();
        });
    }

    public function getPost($id)
    {
        return cache()->remember("blog.post.{$id}", 3600, function () use ($id) {
            return Post::with('user')->find($id);
        });
    }

    private function getListedPosts()
    {
        return Post::with('user')->orderBy('created_at', 'desc')->paginate(10);
    }

    /**
     * Clear the cache of the three first pages
     */
    public static function clearCachePosts() {
        Cache::forget('blog.index.1');
        Cache::forget('blog.index.2');
        Cache::forget('blog.index.3');
    }
}
