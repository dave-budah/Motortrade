<?php

namespace App\Jobs;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;
use App\Services\SaveImageService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\File;

class UpdatePost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $post;
    private $title;
    private $price;
    private $image;
    private $author;
    private $tags;
    private $radii;
    private $widths;
    private $brands;
    private $vehicles;

    public function __construct(
        Post $post,
        string $title,
        ?string $price,
        ?string $image,
        User $author,
        array $tags = [],
        array $radii = [],
        array $widths = [],
        array $brands = [],
        array $vehicles = [],
    )
    {
        $this->post = $post;
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->author = $author;
        $this->tags = $tags;
        $this->radii = $radii;
        $this->widths = $widths;
        $this->brands = $brands;
        $this->vehicles = $vehicles;
    }

    public static function fromRequest(Post $post, PostRequest $request): self
    {
        return new static(
            $post,
            $request->title(),
            $request->price(),
            $request->image(),
            $request->author(),
            $request->tags(),
            $request->radii(),
            $request->widths(),
            $request->brands(),
            $request->vehicles(),
        );
    }

    public function handle(): Post
    {
        $this->post->update([
            'title' => $this->title,
            'price' => $this->price,
        ]);
        $this->post->syncTags($this->tags);
        $this->post->syncRadii($this->radii);
        $this->post->syncWidths($this->widths);
        $this->post->syncBrands($this->brands);
        $this->post->syncVehicles($this->vehicles);

        if (!is_null($this->image)) {
            File::delete(storage_path('app/' . $this->post->image));
            SaveImageService::UploadImage($this->image, $this->post, Post::TABLE);
        }
        return $this->post;
    }
}
