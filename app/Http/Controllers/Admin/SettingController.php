<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = \App\Models\Setting::all()->pluck('value', 'key');
        return view('admin.settings.index', compact('settings'));
    }

    public function update(\Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'settings' => 'nullable|array',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        if (isset($validated['settings'])) {
            foreach ($validated['settings'] as $key => $value) {
                \App\Models\Setting::updateOrCreate(['key' => $key], ['value' => $value]);
            }
        }

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('logos', 'public');
            \App\Models\Setting::updateOrCreate(['key' => 'logo'], ['value' => $path]);
        }

        return back()->with('success', 'Settings updated successfully.');
    }
}
