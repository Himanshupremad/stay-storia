<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\index;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    function index(request $request){
        return view('backend.index');
    }

    function indexstore(request $request){
        // return $request->all();
        $data = $request->validate([
            'name'=>'required',
            'comment'=>'required',

        ]);
        $result = index::create($data);
        if ($result) {
            return "data is sumbited";
        }else{
            return "data is not sumbited";
        }

    }
}
