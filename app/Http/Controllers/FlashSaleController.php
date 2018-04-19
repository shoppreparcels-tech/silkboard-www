<?php

namespace App\Http\Controllers;

use App\FlashSale;
use App\Mail\FlashSaleOtp;
use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Input;
use App\Mail\FlashSaleInvite;
use Illuminate\Support\Facades\Mail;
use App\Customer;

use Auth;



class FlashSaleController extends Controller
{

    public function invite(Request $request)
    {
        $contact = Contact::orderBy('id', 'asc') -> get();
        return view('flash-sale.invite')->with([
            'contact'=>$contact
        ]);
    }
    public function sendOtp(Request $req){

        $otp = rand(10000,99999);
        Customer::where('id',327)->update(['otp'=>$otp]);

        $this->sendEmailOtp(327,$otp);
        return response()->json(['error' => '0',
            'message' => 'Otp sent to customer successfully',
            'otp'=>$otp]);

    }

    public function sendInvitation(Request $req)
    {
        $friend_list = Input::get('email');
       $this->sendEmailVerification($friend_list);
       return redirect()->back()->with('message','Invitation successfully sent');
    }

    public function sendEmailOtp($customer_id,$otp)
    {
            $customer = Customer::where('id',327)
                           ->select(['email'])
                           ->first();
            Mail::to($customer->email)->send(new FlashSaleOtp($customer,$otp));
    }

    public function sendEmailVerification($friend_list)
    {
        foreach ($friend_list as $friend)
        {
            Mail::to($friend)->send(new FlashSaleInvite());
        }

    }

    public function sales()
    {
        $sales = FlashSale::where( 'store_id','=', 703)
            ->select(['flash_sales.id','flash_sales.store_id','flash_sales.slug','flash_sales.name','flash_sales.starts_at','stores.name','stores.logo'])
            ->join('stores', 'flash_sales.store_id', '=', 'stores.id')
            ->get();
        return view('flash-sale.sales-list')
            ->with(['sales'=>$sales]);


    }
    public function index()
    {
        return view('flash-sale.redmi-5A');
    }

    public function mi5ADetail()
    {
        return view('flash-sale.redmi-5A-detail');
    }

}
