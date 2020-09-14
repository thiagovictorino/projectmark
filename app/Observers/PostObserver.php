<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class PostObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        Cache::forget('blog.index');
    }

    /**
     * Handle the post "updated" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        Cache::forget('blog.index');
        Cache::forget("blog.post.{$post->id}");
    }

    /**
     * Handle the post "deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        Cache::forget('blog.index');
        Cache::forget("blog.post.{$post->id}");
    }

    /**
     * Handle the post "restored" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function restored(Post $post)
    {
        Cache::forget('blog.index');
        Cache::forget("blog.post.{$post->id}");
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        Cache::forget('blog.index');
        Cache::forget("blog.post.{$post->id}");
    }
}
