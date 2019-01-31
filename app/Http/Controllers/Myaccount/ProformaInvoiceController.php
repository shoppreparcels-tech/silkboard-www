<?php

namespace App\Http\Controllers;

use App\ShipRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\NumberFormatter\NumberFormatter;

class ProformaInvoiceController extends Controller
{
  public function getInvoiceDetail(Request $request)
  {
    $ship_request = ShipRequest::where('id', $request->shipment_id)
      ->with(array('location' => function ($query) {
        $query->select('id', 'name', 'iso3');
      }))
      ->select('id', 'country', 'package_ids', 'weight', 'address', 'full_name', 'phone')
      ->first();
      $package_ids = preg_replace("/'/", "", $ship_request->package_ids);
      $query = "SELECT item_categories.name, 
                     Sum(quantity) AS quantity,
                     price AS unit_price, 
                     Sum(total) AS total 
              FROM   `package_items` 
                     JOIN item_categories 
                       ON item_categories.id = package_items.item_category_id               
                WHERE  package_items.`package_id` in($package_ids)
              GROUP  BY item_categories.name, 
                        package_items.price ";
    $package_items_by_category = DB::select(DB::raw($query));

    $total_amount = round(array_reduce($package_items_by_category, function ($nxt, $x) {
      return $nxt + $x->total;
    }, 0));

    $number_format = new NumberFormatter();
    $amount_in_words = $number_format->number_to_word($total_amount);

    if ($request->dropdown_carrier == 'dhl') {
      return view('invoices.dhl')->with([
        'ship_request' => $ship_request,
        'package_items_by_category' => $package_items_by_category,
        'total' => $total_amount,
        'amount_in_words' => $amount_in_words,
      ]);
    } else if ($request->dropdown_carrier == 'dtdc') {
      return view('invoices.dtdc')->with([
        'ship_request' => $ship_request,
        'package_items_by_category' => $package_items_by_category,
        'total' => $total_amount,
        'amount_in_words' => $amount_in_words,
      ]);
    } else if ($request->dropdown_carrier == 'aipex') {
      return view('invoices.aipex')->with([
        'ship_request' => $ship_request,
        'package_items_by_category' => $package_items_by_category,
        'total' => $total_amount,
        'amount_in_words' => $amount_in_words,
      ]);
    }
  }

}
