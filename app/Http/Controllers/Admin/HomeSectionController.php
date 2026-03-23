<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeSectionController extends Controller
{
    public function index()
    {
        $sections = \App\Models\HomeSection::all();
        return view('admin.home-sections.index', compact('sections'));
    }

    public function edit(\App\Models\HomeSection $homeSection)
    {
        return view('admin.home-sections.edit', compact('homeSection'));
    }

    public function update(\Illuminate\Http\Request $request, \App\Models\HomeSection $homeSection)
    {
        $validated = $request->validate([
            'content' => 'required|array',
            'is_visible' => 'required|boolean',
        ]);

        $homeSection->update([
            'content' => $validated['content'],
            'is_visible' => $validated['is_visible'],
        ]);

        return redirect()->route('admin.home-sections.index')->with('success', 'Section updated successfully.');
    }
}
