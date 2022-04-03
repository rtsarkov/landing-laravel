<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $contacts = Contact::query()->first()->get();
        return view('admin.contacts.index')->with([
            'contacts' => $contacts
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $contact = Contact::query()->findOrFail($id);
        return view('admin.contacts.edit')->with([
            'contact' => $contact
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(ContactRequest $request, $id)
    {
        $contact = Contact::query()->findOrFail($id);
        $contact->update($request->validated());
        return redirect(route('admin.contacts.index'));
    }
}
