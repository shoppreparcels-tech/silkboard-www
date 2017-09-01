<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use Auth;
use Illuminate\Support\Facades\File;

use App\Faq;
use App\FaqCategory;

class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function faqCats()
    {
    	$categories = FaqCategory::all();
    	return view('admin.faq_cat')->with('categories', $categories);
    }

    public function submitCategory(Request $request)
    {
    	$this->validate($request, [
    		'heading' => 'required|max:255|unique:faq_categories'
    	]);
    	$cat = new FaqCategory;
    	$cat->heading = $request->heading;
    	$cat->save();
    	return redirect(route('admin.categories'))->with('message', 'New Category Added.');
    }

    public function updateCategory(Request $request)
    {
    	$this->validate($request, [
    		'catid' => 'required',
    		'heading' => 'required|max:255|unique:faq_categories'
    	]);

    	$cat = FaqCategory::find($request->catid);
    	$cat->heading = $request->heading;
    	$cat->save();
    	return redirect(route('admin.faq.category'))->with('message', 'Category Updated.');
    }

    public function viewCategory(Request $request)
    {
    	$cat = $request->id;
    	$category = FaqCategory::find($cat);
    	return view('admin.faq')->with(['category'=>$category]);
    }

    public function submitFaq(Request $request)
    {
    	$this->validate($request, [
    		'catid' => 'required',
    		'question' => 'required',
    		'answer' => 'required',
    	]);

    	$faq = new Faq;
    	$faq->catid = $request->catid;
    	$faq->question = $request->question;
    	$faq->answer = $request->answer;
    	$faq->save();

    	return redirect()->back()->with('message', 'New item added to category.');
    }

    public function updateFaq(Request $request)
    {
    	$this->validate($request, [
    		'faqid' => 'required',
    		'question' => 'required',
    		'answer' => 'required',
    	]);

    	$faq = Faq::find($request->faqid);
    	$faq->question = $request->question;
    	$faq->answer = $request->answer;
    	$faq->save();

    	return redirect()->back()->with('message', 'Question & Answer has been updated');
    }

    public function deleteFaq(Request $request)
    {
    	Faq::find($request->faqid)->delete();
    	return redirect()->back()->with('error', 'Question & Answer Removed.');
    }
}
