<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('backend.contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('backend.contacts.create');
    }

    public function store(StoreContactRequest $request)
    {

        Contact::create($request->validated());

        return redirect()->route('contacts.index')->with('success', 'Data Aded');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', __('alerts.Record has been deleted'));
    }
}
