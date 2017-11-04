<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Review;
use App\Country;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function reviews()
    {
    	$reviews = Review::orderBy('updated_at', 'desc')->paginate(10);
    	$countries = Country::orderBy('name', 'asc')->get();

    	return view('admin.reviews')->with(['reviews'=>$reviews, 'countries'=>$countries]);
    }

    public function submitReview(Request $request)
    {
    	$this->validate($request, [
            'person' => 'required|max:250',
    		'countrid' => 'required',
    		'review' => 'required',
    		'rating' => 'required',
    	]);

    	$review = new Review;
    	$review->person = $request->person;
    	$review->countrid = $request->countrid;
    	$review->review = $request->review;
    	$review->rating = $request->rating;
        $review->approve = ($request->approve == "1") ? '1' : '0';
    	$review->save();

    	return redirect()->back()->with('message', 'Success! New review added.');
    }

    public function updateReview(Request $request)
    {
        $this->validate($request, [
            'reviewid' => 'required',
            'person' => 'required|max:250',
            'countrid' => 'required',
            'review' => 'required',
            'rating' => 'required',
        ]);

        $review = Review::find($request->reviewid);
        $review->person = $request->person;
        $review->countrid = $request->countrid;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->approve = ($request->approve == "1") ? '1' : '0';
        $review->save();

        return redirect()->back()->with('message', 'Success! Review Updated.');
    }

    public function deleteReview(Request $request)
    {
        Review::find($request->reviewid)->delete();
        return redirect()->back()->with('error', 'Success! Review deleted.');
    }
}
