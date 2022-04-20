<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Jobs\CreateTag;
use App\Models\Tag;
use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Tag::class, 'tag');
    }


    public function index()
    {
        $this->authorize(UserPolicy::SUPERADMIN, User::class);
        return view('admin.tags.index', [
            'tags' => Tag::paginate(10),
        ]);
    }


    public function create()
    {
        return view('admin.tags.create');
    }


    public function store(TagRequest $request)
    {
        $this->dispatchSync(CreateTag::fromRequest($request));
        return redirect()->route('admin.tags.index')->with('success', 'Tag created successfully.');
    }


    public function show(Tag $tag)
    {
        //
    }


    public function edit(Tag $tag)
    {
        //
    }


    public function update(Request $request, Tag $tag)
    {
        //
    }


    public function destroy(Tag $tag)
    {
        //
    }
}
