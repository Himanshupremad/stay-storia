<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\villa;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class villaController extends Controller
{
    //
    function villastore(request $request)
    {
        // return $request->all();
        $villa = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'city' => 'required',
            'price' => 'required',

        ]);
        $picture = str::random(5) . '.' . $request->image->extension();
        $request->image->move(public_path('pictures'), $picture);
        $villa['image'] = 'pictures/' . $picture;

        $result = villa::create($villa);
        if ($result) {
            return redirect('villalist')->with('success', 'villas created is successfull');
        } else {
            return back()->with('error', 'villas created is not successfull');
        }
    }




    function villas(request $request)
    {
        return view('backend.villas.craetevillas');

    }

    function villalist(request $request)
    {
        $villas = villa::all();
        return view('backend.villas.villaslist', compact('villas'));

    }
}
