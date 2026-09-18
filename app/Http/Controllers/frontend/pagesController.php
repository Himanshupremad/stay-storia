<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\contact;
use App\Models\pages;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    //   function indexpage(request $request){
    //     return view('frontend.index');
    // }
    function aboutpage(request $request){
        return view('frontend.about');
    }

     function contactpage(request $request){
        $contact= contact::first();
        return view('frontend.contact', compact('contact'));
    }

    function contactstore(request $request){
        $var = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'comment'=>'required',
        ]);

        $save = pages::create($var);
        if ($save) {
            return back()->with('success', 'contact ditailes is successfull');
        }else{
            return back()->with('error', 'contact ditailes is not successfull');
        }

    }

    
     function journalpage(request $request){
        return view('frontend.journal');
    }

      function villaspage(request $request){
        return view('frontend.villas');
    }
}
