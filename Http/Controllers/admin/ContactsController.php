<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactsController extends Controller
{
    /**
     * Display a listing of the contacts.
     */
    public function index()
    {
        $contacts = Contacts::latest()->get(); // Newest first
        return view('admin.contacts', compact('contacts'));
    }

    /**
     * Show the form for creating a new contact (optional).
     */
    public function create()
    {
        return view('admin.createContact'); // Optional
    }

    /**
     * Store a newly created contact in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:11',
            'message' => 'required|string'
        ]);

        Contacts::create($request->only(['name','email','phone','message']));

        return redirect()->route('contactsList')->with('success', 'Contact added successfully.');
    }

    /**
     * Display the specified contact by ID.
     */
    public function show($id)
    {
        $contact = Contacts::findOrFail($id);
        return view('admin.showContact', compact('contact'));
    }

    /**
     * Update the specified contact in storage (optional).
     */
    public function update(Request $request, $id)
    {
        $contact = Contacts::findOrFail($id);

        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:11',
            'message' => 'required|string'
        ]);

        $contact->update($request->only(['name','email','phone','message']));

        return redirect()->route('contactsList')->with('success', 'Contact updated successfully.');
    }

    /**
     * Remove the specified contact from storage by ID.
     */
    public function destroy($id)
    {
        $contact = Contacts::findOrFail($id);
        $contact->delete();

        return redirect()->route('contactsList')->with('success', 'Contact deleted successfully.');
    }
}
