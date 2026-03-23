<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = \App\Models\Service::all();
        return view('services.index', compact('services'));
    }

    public function show(\App\Models\Service $service)
    {
        return view('services.show', compact('service'));
    }
}
