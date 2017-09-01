<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Page;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function pages()
    {
    	$pages  = Page::all();
    	return view('admin.pages')->with('pages', $pages);
    }
    public function addPage()
    {
    	return view('admin.pages-add');
    }
    public function submitPage(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required',
    		'slug' => 'required',
    		'content' => 'required',
    	]);
    	$page = new Page;
    	$page->title = $request->title;
    	$page->slug = $request->slug;
    	$page->content = $request->content;
    	$page->save();
    	return redirect(route('admin.pages'))->with('message', 'Success! New page added.');
    }
    public function editPage(Request $request)
    {
    	$page = Page::find($request->id);
    	return view('admin.pages-edit')->with('page', $page);
    }
    public function updatePage(Request $request)
    {
    	$this->validate($request, [
    		'pageid'=> 'required',
    		'title' => 'required',
    		'slug' => 'required',
    		'content' => 'required',
    	]);
    	$page = Page::find($request->pageid);
    	$page->title = $request->title;
    	$page->slug = $request->slug;
    	$page->content = $request->content;
    	$page->save();
    	return redirect(route('admin.pages'))->with('message', 'Success! Page has been updated.');
    }
}
