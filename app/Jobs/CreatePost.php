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

class CreatePost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

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
        string $title,
        ?string $price,
        ?string $image,
        User $author,
        array $tags = [],
        array $radii = [],
        array $widths = [],
        array $brands = [],
        array $vehicles = [],
    ) {
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

    public static function fromRequest(PostRequest $request): self
    {
        return new static(
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
        $post = new Post([
            'title' => $this->title,
            'price' => $this->price,
            'image' => $this->image,
        ]);
        $post->authoredBy($this->author);
        $post->syncTags($this->tags);
        $post->syncRadii($this->radii);
        $post->syncWidths($this->widths);
        $post->syncBrands($this->brands);
        $post->syncVehicles($this->vehicles);
        SaveImageService::UploadImage($this->image, $post,Post::TABLE);
        return $post;
    }
}
