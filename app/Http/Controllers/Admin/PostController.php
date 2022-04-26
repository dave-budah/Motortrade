<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Jobs\CreatePost;
use App\Jobs\DeletePost;
use App\Jobs\UpdatePost;
use App\Models\Brand;
use App\Models\Post;
use App\Models\Radius;
use App\Models\Tag;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Width;
use App\Policies\UserPolicy;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }

    public function index()
    {
        return view('admin.posts.index', ['posts' => Post::paginate(10)]);
    }

    public function create()
    {
        return view('admin.posts.create', ['tags' => Tag::all(), 'brands' => Brand::all(), 'vehicles' => Vehicle::all(), 'radii' => Radius::all(), 'widths' => Width::all()]);
    }

    public function store(PostRequest $request)
    {
        $this->dispatchSync(CreatePost::fromRequest($request));
        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post,
            'tags' => Tag::all(),
            'selectedTags' => old('tags', $post->tags()->pluck('id')->toArray()),
            'brands' => Brand::all(),
            'selectedBrands' => old('brands', $post->brands()->pluck('id')->toArray()),
            'vehicles' => Vehicle::all(),
            'selectedVehicles' => old('vehicles', $post->vehicles()->pluck('id')->toArray()),
            'radii' => Radius::all(),
            'selectedRadii' => old('radii', $post->radii()->pluck('id')->toArray()),
            'widths' => Width::all(),
            'selectedWidths' => old('widths', $post->widths()->pluck('id')->toArray()),
        ]);
    }

    public function update(PostRequest $request, Post $post)
    {
      $this->dispatchSync(UpdatePost::fromRequest($post, $request));
        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
       $this->dispatchSync(new DeletePost($post));
        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully');
    }
}
