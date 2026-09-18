<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Models\storia;
use Illuminate\Support\str;
use Illuminate\Http\Request;

class bannerController extends Controller
{
    //
  

    function bannerpage(request $request)
    {
        // return $request->all();
        $data = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
            'status' => 'required',
        ]);


        $img = str::random(7) . '.' . $request->image->extension();
        $request->image->move(public_path('bannerimg'), $img);
        $data['image'] = 'bannerimg/' . $img;

        $result = storia::create($data);
        if ($result) {
            return redirect('listbanner')->with('success', 'banner create is siccessfull');
        } else {
            return back()->with('error', 'banner is not created');
        }


    }


      function banner(request $request)
    {
        return view('backend.banner.createbanner');
    }
    function bannerlist(request $request)
    {
        $lists = storia::all();
        return view('backend.banner.listbanner', compact('lists'));
    }
}
