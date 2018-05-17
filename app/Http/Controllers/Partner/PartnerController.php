<?php

namespace App\Http\Controllers\Partner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Partner;


class PartnerController extends Controller
{
    public function  index(Request $req){

        $partner = Partner::orderBy('id','asc')->get();

       // echo json_encode($partner);exit;
        return view('partners.dhl')
            ->with([
                'partners' => $partner,
            ]);
    }
}

