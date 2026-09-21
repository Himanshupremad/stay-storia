<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\faqs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class faqsController extends Controller
{
    //
    function faqsstore(request $request)
    {
        $data = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $result = faqs::create($data);
        if ($result) {
        return Redirect('faqslist')->with('success', 'faqs creat successfull');
        }else{
            return back()->with('error', 'faqs creat not successfull');
        }
    }

    function faqsget(){
        return view('backend.faqs.createfaqs');
    }

    function faqslist(request $request){
        $faqss = faqs::all();
        return view('backend.faqs.listfaqs', compact('faqss'));
    }
}
