<?php

namespace App\Http\Controllers\Myaccount\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Package;
use App\ShipRequest;
use Auth;

class ReportController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }

  public function reports()
  {
    $customer_count = Customer::count();
    $package_count = Package::count();
    $shipment_count = ShipRequest::count();
      $shipQueue = ShipRequest::whereIn('shipping_status', ['inqueue', 'inreview', 'received','confirmation'])->orderBy('created_at', 'desc')->get();
      return view('myaccount.admin.reports')->with(['customer_count' => $customer_count, 'package_count' => $package_count, 'shipment_count' => $shipment_count, 'shipQueue' => $shipQueue]);
  }

}
