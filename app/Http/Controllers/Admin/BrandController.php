<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Jobs\CreateBrand;
use App\Jobs\DeleteBrand;
use App\Models\Brand;
use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Brand::class, 'brand');
    }


    public function index()
    {
        $this->authorize(UserPolicy::SUPERADMIN, User::class);
        return view('admin.brands.index', [
            'brands' => Brand::paginate(10)
        ]);
    }


    public function create()
    {
        return view('admin.brands.create');
    }


    public function store(BrandRequest $request)
    {
        $this->dispatchSync(CreateBrand::fromRequest($request));
        return redirect()->route('admin.brands.index')->with('success', 'Brand created successfully.');
    }


    public function show(Brand $brand)
    {
        //
    }


    public function edit(Brand $brand)
    {
        //
    }

    public function update(Request $request, Brand $brand)
    {
        //
    }


    public function destroy(Brand $brand)
    {
        $this->dispatchSync(new DeleteBrand($brand));
        return redirect()->route('admin.brands.index')->with('success', 'Brand deleted successfully.');
    }
}
