<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\about;
use Illuminate\Support\str;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    //

       public function about(Request $request)
    {
        $about = about::first();
        // return $contact;
        return view('backend.about.about',compact('about'));
    }
    public function saveAbout(Request $request){
        // return $request->all();
        $request->validate([
            'image'=> 'nullable',
            'content'=> 'nullable',
          
        ]);


        $var = about::first() ?? new about();
        $var->contentt = $request->contentt;
        if($request->image){
            $img = str::random(5) . '.' . $request->image->extension();
            $request->image->move(public_path('aboutimg'), $img);
            $var->image = 'aboutimg/' . $img;
        }
        $result = $var->save();
        if ($result) {
            return back()->with('success', 'about is successfull');
        }else{
            return back()->with('error', 'about is not successfull');
        }
    }


    
}
