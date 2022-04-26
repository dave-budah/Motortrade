<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WidthRequest;
use App\Jobs\CreateWidth;
use App\Jobs\DeleteWidth;
use App\Models\User;
use App\Models\Width;
use App\Policies\UserPolicy;
use Illuminate\Http\Request;

class WidthController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Width::class, 'width');
    }

    public function index()
    {
        $this->authorize(UserPolicy::SUPERADMIN, User::class);
        return view('admin.width.index', [
            'widths' => Width::paginate(10),
        ]);
    }


    public function create()
    {
        return view('admin.width.create');
    }


    public function store(WidthRequest $request)
    {
        $this->dispatchSync(CreateWidth::fromRequest($request));
        return redirect()->route('admin.widths.index')->with('success', 'Width created successfully.');
    }


    public function show(Width $width)
    {
        //
    }


    public function edit(Width $width)
    {
        //
    }


    public function update(Request $request, Width $width)
    {
        //
    }


    public function destroy(Width $width)
    {
        $this->dispatchSync(new DeleteWidth($width));
        return redirect()->route('admin.widths.index')->with('success', 'Width deleted successfully.');
    }
}
