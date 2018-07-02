<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    //

    public function index()
    {
        $stories = Story::orderBy('id','desc') ->get();
        return view('page.shoppre-story')->with(['stories'=>$stories]);
    }

    public function view(Request $req)
    {
        $story_id = $req->id;
        $story = Story::where('id',$story_id)->first();
        return view('page.shoppre-story-detail') ->with(['story'=>$story]);
    }
}
