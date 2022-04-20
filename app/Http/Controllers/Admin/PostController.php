<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Jobs\CreatePost;
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
        return view('admin.posts.index',['posts'=> Post::paginate(10)]);
    }

    public function create()
    {
        return view('admin.posts.create', ['tags' => Tag::all(), 'brands' => Brand::all(), 'vehicles'=> Vehicle::all(), 'radii'=> Radius::all(), 'widths'=> Width::all()]);
    }

    public function store(PostRequest $request)
    {
        $this->dispatchSync(CreatePost::fromRequest($request));
        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully');
    }
}
