<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::orderBy('first_name')->get();
        return view('contacts.index', compact('contacts')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'nullable|string|max:255',
        'company' => 'nullable|string|max:255',

        'phone1' => 'required|string|max:255',
        'phone2' => 'nullable|string|max:255',
        'phone3' => 'nullable|string|max:255',

        'email' => 'nullable|email|max:255',
        'address' => 'nullable|string|max:255',
        'birthday' => 'nullable|date',
        'notes' => 'nullable|string',
        ]);

        Contact::create($validated);

        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',

            'phone1' => 'required|string|max:255',
            'phone2' => 'nullable|string|max:255',
            'phone3' => 'nullable|string|max:255',

            'email' => 'nullable|email|max:255',
            'adress' => 'nullable|string|max:255',
            'birthday' => 'nullable|date',
            'notes' => 'nullable|string',
        ]);

        $contact->update($validated);

        return redirect()->route('contacts.show', $contact);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index');
    }

    public function toggleFavorite(Contact $contact)
    {
     $contact->favorite = ! $contact->favorite;
     $contact->save();
     
     return redirect()->route('contacts.show', $contact);
    }

    public function favorites()
{
    $contacts = Contact::where('favorite', true)
        ->orderBy('first_name')
        ->get();

    return view('contacts.favorites', compact('contacts'));
}
}
