<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VehicleRequest;
use App\Jobs\CreateVehicle;
use App\Jobs\DeleteVehicle;
use App\Models\User;
use App\Models\Vehicle;
use App\Policies\UserPolicy;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Vehicle::class, 'vehicle');
    }


    public function index()
    {
        $this->authorize(UserPolicy::SUPERADMIN, User::class);
        return view('admin.vehicles.index', [
            'vehicles' => Vehicle::paginate(10),
        ]);
    }


    public function create()
    {
        return view('admin.vehicles.create');
    }



    public function store(VehicleRequest $request)
    {
        $this->dispatchSync(CreateVehicle::fromRequest($request));
        return redirect()->route('admin.vehicles.index')->with('success', 'Vehicles created successfully.');
    }


    public function show(Vehicle $vehicle)
    {
        //
    }


    public function edit(Vehicle $vehicle)
    {
        //
    }


    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }


    public function destroy(Vehicle $vehicle)
    {
        $this->dispatchSync(new DeleteVehicle($vehicle));
        return redirect()->route('admin.vehicles.index')->with('success', 'Vehicles deleted successfully.');
    }
}
