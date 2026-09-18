<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    function indexs(request $request){
        return view('frontend.index');
        
    }
}
