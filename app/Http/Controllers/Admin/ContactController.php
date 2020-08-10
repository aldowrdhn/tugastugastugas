<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.page.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts = Contact::all();
        return view('admin.page.contact.create', compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name_store' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'phone_global' => 'required',
            'office_hours' => 'required',
            'url' => 'required'
        ]);

        Contact::create($validatedData);
        $request->session()->flash('pesan', "Your successfully added a contact");
        return redirect()->route('contact.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        // $contacts = Contact::all();
        return view('admin.page.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        $validatedData = $request->validate([
            'name_store' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'phone_global' => 'required',
            'office_hours' => 'required',
            'url' => 'required'
        ]);

        $contact->update($validatedData);
        return redirect()->route('contact.index')->with('update', 'the information has been successfully update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
    }
}
