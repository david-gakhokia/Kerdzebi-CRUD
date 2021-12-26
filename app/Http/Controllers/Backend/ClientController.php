<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientRequest;
use App\Models\Client;
use App\Models\ClientTranslation;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Http\Request;



class ClientController extends Controller
{

    public function index()
    {
        $clients = Client::translatedIn(app()->getLocale())
            ->latest()
            ->take(10)
            ->get();

        return view('backend.clients.index', compact('clients'));
    }

    public function create()
    {

        return view('backend.clients.create');
    }

    public function store( StoreClientRequest $request)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/clients';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }


        Client::create($data);

        return redirect()->route('clients.index')->withSuccessMessage(__('alerts.New record has been added'));
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

    public function destroy($id)
    {
        Client::find($id)->delete();

        return redirect()->route('clients.index')->withSuccessMessage(__('alerts.Record has been deleted'));
    }
}
