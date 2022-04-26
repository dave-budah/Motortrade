<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Str;

class PostObserver
{

    public function created(Post $post)
    {
        $post->slug = Str::slug($post->title . '-' . now()->timestamp);
        $post->save();
    }


    public function updated(Post $post)
    {
        $post->slug = Str::slug($post->title . '-' . now()->timestamp);
        $post->save();
    }


    public function deleted(Post $post)
    {
        //
    }


    public function restored(Post $post)
    {
        //
    }


    public function forceDeleted(Post $post)
    {
        //
    }
}
