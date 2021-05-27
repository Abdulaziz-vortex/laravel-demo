<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request){
        return view('news.index');
        echo '';
        
    }

    // create action for form request

    public function create(Request $request){
        dd($request->name);
    }
}
