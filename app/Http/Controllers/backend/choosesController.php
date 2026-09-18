<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\choose;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class choosesController extends Controller
{
    //
    function choose(request $request)
    {
        // return $request->all();
        return view('backend.whyChoose.createchoose');
    }

    function chooselist(request $request)
    {
        $chooselists = choose::all();
        return view('backend.whyChoose.chooselist', compact('chooselists'));
    }


    function choosestore(request $request)
    {
        // return $request->all();
        $var = $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $photo = str::random(5). '.' . $request->image->extension();
        $request->image->move(public_path('imagechoose'), $photo);
        $var['image']= 'imagechoose/' . $photo;

        $save = choose::create($var);
        if ($save) {
            return redirect('chooselist')->with('success', 'why chooses is done');
        }else{
            return back()->with('error', 'why chooses is not done');
        }

    }

}
