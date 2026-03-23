<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sections = \App\Models\HomeSection::where('is_visible', true)->get()->keyBy('section_key');
        $testimonials = \App\Models\Testimonial::all();
        $services = \App\Models\Service::limit(4)->get();
        
        return view('home', compact('sections', 'testimonials', 'services'));
    }
}
