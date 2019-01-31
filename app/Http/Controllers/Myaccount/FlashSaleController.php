<?php

namespace App\Http\Controllers\Myaccount;

use App\FlashSale;
use App\Store;
use Illuminate\Http\Request;

class FlashSaleController extends Controller
{
    public function create()
    {
        $flashsale=FlashSale::orderBy('id')
            ->select('id','store_id','slug','name','starts_at','deleted_at')
            ->get();

        $stores=Store::orderBy('id', 'asc')
            ->select('id','name')
            ->get();
        return view('myaccount.admin.flash-sale.create-sale')->with([
            'stores'=>$stores ,'flashsale'=>$flashsale
        ]);
    }
    public function submit(Request $request)
    {

        $flashsale=new FlashSale();
        $flashsale->store_id=$request->store_id;
        $flashsale->slug=$request->slug;
        $flashsale->name=$request->name;
        $flashsale->starts_at=date('Y-m-d', strtotime($request->starts_at));
        $flashsale->save();

      return redirect(route('flash-sale.create-sale'))->with('message', 'Success! New Sale has been Created.');
    }
}
