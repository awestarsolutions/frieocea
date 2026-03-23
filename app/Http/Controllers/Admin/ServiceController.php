<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = \App\Models\Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.form');
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:services,slug',
            'icon' => 'nullable|string',
            'description' => 'required|string',
            'benefits' => 'nullable|array',
            'use_cases' => 'nullable|array',
        ]);

        \App\Models\Service::create($data);

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    public function edit(\App\Models\Service $service)
    {
        return view('admin.services.form', compact('service'));
    }

    public function update(\Illuminate\Http\Request $request, \App\Models\Service $service)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:services,slug,' . $service->id,
            'icon' => 'nullable|string',
            'description' => 'required|string',
            'benefits' => 'nullable|array',
            'use_cases' => 'nullable|array',
        ]);

        $service->update($data);

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(\App\Models\Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
