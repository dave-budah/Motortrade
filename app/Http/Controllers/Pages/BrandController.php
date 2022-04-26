<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('pages.brands.index', [
            'brands' => Brand::all(),
        ]);
    }
    public function show(Brand $brand) {
        return view('pages.brands.show');
    }
}
