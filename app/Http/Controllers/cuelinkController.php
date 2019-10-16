<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

class cuelinkController extends Controller
{
    public function index(Request $request)
    {
        return view('cuelink.cuelink')->with(['url'=>$request->url]);
    }
}
