<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contact(Request $request)
    {
        $contact = contact::first();
        // return $contact;
        return view('backend.contact.contact', compact('contact'));
    }
    public function saveContact(Request $request)
    {
        // return $request->all();
        $request->validate([
            'yearsOfExcellence' => 'nullable|integer|min:0|max:1000000000',
            'groupsHosted' => 'nullable',
            'guestsWelcomed' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable',
            'whatsapp' => 'nullable',
            'copyright' => 'nullable',
            'email' => 'nullable',
            'number' => 'nullable',
        ]);


        $var = contact::first() ?? new contact();
        $var->yearsOfExcellence = $request->yearsOfExcellence;
        $var->groupsHosted = $request->groupsHosted;
        $var->guestsWelcomed = $request->guestsWelcomed;
        $var->facebook = $request->facebook;
        $var->instagram = $request->instagram;
        $var->whatsapp = $request->whatsapp;
        $var->copyright = $request->copyright;
        $var->email = $request->email;
        $var->number = $request->number;

        $result = $var->save();

        if ($result) {
            return back()->with('success', 'contact is successfull');
        } else {
            return back()->with('error', 'contact is not successfull');
        }
    }
}
