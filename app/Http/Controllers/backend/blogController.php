<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class blogController extends Controller
{
    //
    function blogstore(request $request)
    {
        // return $request->all();
        $blog = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'city' => 'required',
            'date' => 'required',

        ]);
        $img = str::random(5) . '.' . $request->image->extension();
        $request->image->move(public_path('blogimg'), $img);
        $blog['image'] = 'blogimg/' . $img;

        $result = blog::create($blog);
        if ($result) {
            return redirect('bloglist')->with('success', 'blogs created is successfull');
        } else {
            return back()->with('error', 'blogs created is not successfull');
        }
    }




    function blogs(request $request)
    {
        return view('backend.blogs.createblog');

    }

    function listblog(request $request)
    {
        $blogs = blog::all();
        return view('backend.blogs.listblog', compact('blogs'));

    }
}


