<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $leads = \App\Models\Contact::latest()->paginate(10);
        return view('admin.leads.index', compact('leads'));
    }

    public function show(\App\Models\Contact $contact)
    {
        if ($contact->status === 'unread') {
            $contact->update(['status' => 'read']);
        }
        return view('admin.leads.show', compact('contact'));
    }

    public function destroy(\App\Models\Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.leads.index')->with('success', 'Lead deleted successfully.');
    }
}
