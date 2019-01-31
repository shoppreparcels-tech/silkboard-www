<?php

namespace App\Http\Controllers\Myaccount\Admin;

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
        $pages = Page::all();
        return view('myaccount.admin.pages')->with('pages', $pages);
    }

    public function addPage()
    {
        return view('myaccount.admin.pages-add');
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
        $page->content = $request->contents;
        $page->meta_title = $request->meta_title;
        $page->meta_description = $request->meta_description;
        $page->meta_keyword = $request->meta_keyword;
        $page->save();
        return redirect(route('admin.pages'))->with('message', 'Success! New page added.');
    }

    public function editPage(Request $request)
    {
        $page = Page::find($request->id);
        return view('myaccount.admin.pages-edit')->with('page', $page);
    }

    public function updatePage(Request $request)
    {
        $this->validate($request, [
            'page_id' => 'required',
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
        ]);
        $page = Page::find($request->page_id);
        $page->title = $request->title;
        $page->slug = $request->slug;

        $page->content = $request->contents;
        $page->meta_title = $request->meta_title;
        $page->meta_description = $request->meta_description;
        $page->meta_keyword = $request->meta_keyword;

        $page->save();
        return redirect(route('admin.pages'))->with('message', 'Success! Page has been updated.');
    }
}
