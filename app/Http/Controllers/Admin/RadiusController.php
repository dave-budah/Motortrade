<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RadiusRequest;
use App\Jobs\CreateRadius;
use App\Jobs\DeleteRadius;
use App\Models\Radius;
use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Http\Request;

class RadiusController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Radius::class, 'radius');
    }


    public function index()
    {
        $this->authorize(UserPolicy::SUPERADMIN, User::class);
        return view('admin.radii.index', [
            'radii' => Radius::paginate(10),
        ]);
    }


    public function create()
    {
        return view('admin.radii.create');
    }


    public function store(RadiusRequest $request)
    {
        $this->dispatchSync(CreateRadius::fromRequest($request));
        return redirect()->route('admin.radii.index')->with('success', 'Radius created successfully.');
    }


    public function show(Radius $radius)
    {
        //
    }


    public function edit(Radius $radius)
    {
        //
    }

    public function update(Request $request, Radius $radius)
    {
        //
    }


    public function destroy(Radius $radius)
    {
        $this->dispatchSync(new DeleteRadius($radius));
        return redirect()->route('admin.radii.index')->with('success', 'Radius deleted successfully.');
    }
}
