<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'sections' => \App\Models\HomeSection::count(),
            'services' => \App\Models\Service::count(),
            'testimonials' => \App\Models\Testimonial::count(),
            'leads' => \App\Models\Contact::where('status', 'unread')->count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
