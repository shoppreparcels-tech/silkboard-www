<?php

namespace App\Http\Controllers\Myaccount\Admin;

use App\Story;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\File;

class StoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function updateSubmit(Request $req)
    {
        $story = Story::where('id',$req->hdn_story_id)->first();
        $story->title = $req -> title;
        $story->sub_title = $req -> sub_title;
        $story->pre_description = $req -> pre_description;
        $story->description = $req -> description;
        $url = $req -> url;
        $story->url_keywords = $url;
        $slug = $this->slugify($url);
        $story->slug = $slug;
        $story->save();
        $story_id = $req->hdn_story_id;
        if($req->hasFile('story_image')) {
            $file = $req->file('story_image');
            $destinationPath = "/uploads/story/$story_id/";
            $filename = "IMG-".uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). $destinationPath, $filename);
            $status = Story::where('id',$story_id)->update(['image'=> $filename]);
        }
        return redirect(route('admin.story.index'));
    }

    public function delete(Request $req)
    {
        $story_id = $req->story_id;
        $status = Story::where('id',$story_id)->delete();
        return redirect()->back()->with('success','Story Deleted Successfully');
    }

    public function update(Request $req)
    {
        $story = Story::where('id',$req->id)->first();
        return view('myaccount.admin.story.update')->with(['story'=>$story]);
    }

    public function submit(Request $req)
    {
        $story = new Story();
        $story->title = $req -> title;
        $story->sub_title = $req -> sub_title;
        $story->pre_description = $req -> pre_description;
        $story->description = $req -> description;
        $url = $req -> url;
        $story->url_keywords = $url;
        $slug = $this->slugify($url);
        $story->slug = $slug;
        $story->save();
        $story_id = $story->id;
        if($req->hasFile('story_image')) {
            $file = $req->file('story_image');
                $destinationPath = "/uploads/story/$story_id/";
                $filename = "IMG-".uniqid().'.'.$file->getClientOriginalExtension();
                $file->move(public_path(). $destinationPath, $filename);
                $status = Story::where('id',$story_id)->update(['image'=> $filename]);
        }
        return redirect(route('admin.story.index'));
     }

    public function create()
    {
      return view('myaccount.admin.story.create');
    }

    public function index()
    {
      $stories =  Story::orderBy('id','desc')->get();
      return view('myaccount.admin.story.list')->with(['stories'=>$stories]);
    }

     function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
}
