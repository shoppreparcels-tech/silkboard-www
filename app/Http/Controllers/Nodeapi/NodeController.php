<?php

namespace App\Http\Controllers\Nodeapi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Customer;
use App\WalletTransaction;
use App\ShopperBalance;
use App\LoyaltyPoint;
use App\LoyaltyHistory;
use App\LoyaltyMisc;

class NodeController extends Controller
{
    public function walletShow(Request $request)
    {
        $customer = Customer::find($request->user_id);
        $balance = ShopperBalance::find($customer->balance->id);
        return response()->json(['amount' => $balance->amount]);
    }

    public function walletIndex(Request $request)
    {
        $transactions = WalletTransaction::where('customer_id', $request->user_id)->orderBy('created_at', 'desc')->get();

        return response()->json(['transactions'=>$transactions ]);
    }

    public function walletUpdate(Request $request)
    {
        $customer = Customer::find($request->user_id);
        $balance = ShopperBalance::find($customer->balance->id);

        if (!empty($balance)) {
            if ($request->amount != 0) {
                $balance->amount += $request->amount;
                $balance->save();
            }

            $trans = new WalletTransaction;
            $trans->customer_id = $customer->id;
            $trans->wallet_id = $balance->id;
            $trans->amount = $request->amount;
            $trans->description = $request->description;
            $trans->save();
        }

        return response()->json(['message' => 'success']);
    }

    public function loyaltyShow(Request $request)
    {
        $id = $request->user_id;
        $loyalty = LoyaltyPoint::where('customer_id', $id)->first();
        $history = LoyaltyHistory::where('customer_id', $id)->get();
        $points = LoyaltyMisc::where('customer_id', $id)->get();
        return response()->json([ 'loyalty'=>$loyalty, 'history'=>$history, 'points'=>$points ]);
    }


    public function loyaltyUpdate(Request $request)
    {
        $customer_id = $request->customer_id;
        if ($request->loyaltyAmount >= 100) {
            $hispoints = $request->loyaltyAmount * 10;
            $history = new LoyaltyHistory;
            $history->customer_id = $customer_id;
            $history->points = $hispoints;
            $history->redeemed = date('Y-m-d', time());
            $history->save();

            $loyalty = LoyaltyPoint::where('customer_id', $customer_id)->first();
            $balance = $loyalty->points - $hispoints;

            LoyaltyPoint::where('customer_id', $customer_id)
                ->update([
                    'points' => $balance,
                ]);
        }
        return response()->json(['message' => 'success']);
    }

    public function loyaltyCreate(Request $request)
    {
        $this->validate($request, [
            'info' => 'required',
        ]);

        $loyalid = LoyaltyPoint::where('customer_id', $request->customer_id)->first()->id;
        $loyalty = LoyaltyPoint::find($loyalid);

//        if ($loyalty->ship_request_id != 1) {
            if ($loyalty->level == 1) {
                $points = (int)((5 / 100) * $request->final_amount);
            } elseif ($loyalty->level == 2) {
                $points = (int)((8 / 100) * $request->final_amount);
            } elseif ($loyalty->level == 3) {
                $points = (int)((10 / 100) * $request->final_amount);
            } elseif ($loyalty->level == 4) {
                $points = (int)((12 / 100) * $request->final_amount);
            }

            $loyalty->points += $points;
            $loyalty->total += $points;

            if ($loyalty->total < 1000) {
                $loyalty->level = 1;
            } elseif ($loyalty->total >= 1000 && $loyalty->total < 6000) {
                $loyalty->level = 2;
            } elseif ($loyalty->total >= 6000 && $loyalty->total < 26000) {
                $loyalty->level = 3;
            } elseif ($loyalty->total >= 26000) {
                $loyalty->level = 4;
            }
            $loyalty->ship_request_id = 1;
            $loyalty->save();

            $misc = new LoyaltyMisc;
            $misc->customer_id = $request->customer_id;
            $misc->info = 'Shipping Reward';
            $misc->points = $points;
            $misc->save();

            return response()->json(['message' => 'Loyalty points updated!']);
//        }
    }
}
