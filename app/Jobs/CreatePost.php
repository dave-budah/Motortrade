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
    private $body;
    private $image;
    private $photoCreditLink;
    private $photoCreditText;
    private $author;
    private $tags;
    private $radii;
    private $widths;
    private $brands;

    public function __construct(
        string $title,
        string $body,
        ?string $image,
        ?string $photoCreditLink,
        ?string $photoCreditText,
        User $author,
        array $tags = [],
        array $radii = [],
        array $widths = [],
        array $brands = [],
    ) {
        $this->title = $title;
        $this->body = $body;
        $this->image = $image;
        $this->photoCreditLink = $photoCreditLink;
        $this->photoCreditText = $photoCreditText;
        $this->author = $author;
        $this->tags = $tags;
        $this->radii = $radii;
        $this->widths = $widths;
        $this->brands = $brands;
    }

    public static function fromRequest(PostRequest $request): self
    {
        return new static(
            $request->title(),
            $request->body(),
            $request->image(),
            $request->photoCreditLink(),
            $request->photoCreditText(),
            $request->author(),
            $request->tags(),
            $request->radii(),
            $request->widths(),
            $request->brands(),
        );
    }


    public function handle(): Post
    {
        $post = new Post([
            'title' => $this->title,
            'body' => $this->body,
            'image' => $this->image,
            'photo_credit_link' => $this->photoCreditLink,
            'photo_credit_text' => $this->photoCreditText,
        ]);
        $post->authoredBy($this->author);
        $post->syncTags($this->tags);
        $post->syncRadii($this->radii);
        $post->syncWidths($this->widths);
        $post->syncBrands($this->brands);
        SaveImageService::UploadImage($this->image, $post,Post::TABLE);
        return $post;
    }
}
