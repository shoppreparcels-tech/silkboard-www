<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailFeedback;


use Auth;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback.feedback');
    }

    public function submit(Request $request)
    {

        $this->validate($request, [
            'person' => 'required|max:250',
            'email' => 'required|max:250',
            'customer_service' => 'required',
            'arrive_expectation' => 'required',
            'protected_shipment' => 'required',
            'package_condition' => 'required',
            'easy_service' => 'required',
            'overall_level_of_satisfaction' => 'required',

        ]);
        $feedback = new Feedback();
        $feedback->person = $request->person;
        $feedback->email = $request->email;
        $feedback->customer_service = $request->customer_service;
        $feedback->arrive_expectation = $request->arrive_expectation;
        $feedback->protected_shipment = $request->protected_shipment;
        $feedback->package_condition = $request->package_condition;
        $feedback->easy_service = $request->easy_service;
        $feedback->overall_level_of_satisfaction = $request->overall_level_of_satisfaction;
        $feedback->custom_duty = $request->customs;
        $feedback->suggestions = $request->suggestions;
        $feedback->save();

        $this->sendEmailFeedback($feedback);

        return redirect(route('feedback.confirm'));
    }
    public function sendEmailFeedback($feedback)
    {
        Mail::to($feedback->email)->bcc('support@shoppre.com')->send(new EmailFeedback($feedback));
    }

    public function confirm()
    {
        return view('feedback.confirm-feedback');
    }


}
