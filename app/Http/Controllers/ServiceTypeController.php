<?php
namespace App\Http\Controllers;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    public function index()
    {
        $serviceTypes = ServiceType::all();
        return view('service_types.index', compact('serviceTypes'));
    }

    public function create()
    {
        return view('service_types.create');
    }

    public function store(Request $request)
    {
        ServiceType::create($request->all());
        return redirect()->route('service-types.index');
    }

    public function edit(ServiceType $serviceType)
    {
        return view('service_types.edit', compact('serviceType'));
    }

    public function update(Request $request, ServiceType $serviceType)
    {
        $serviceType->update($request->all());
        return redirect()->route('service-types.index');
    }

    public function destroy(ServiceType $serviceType)
    {
        $serviceType->delete();
        return redirect()->route('service-types.index');
    }
}

