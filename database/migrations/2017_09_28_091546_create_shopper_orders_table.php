<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopperOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopper_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('custid');
            $table->string('refnum');
            $table->string('seller');
            $table->integer('totalqty');
            $table->float('totalprice', 8, 2);
            $table->float('pscost', 8, 2);
            $table->float('sale_tax', 8, 2)->nullable();
            $table->float('ship_charge', 8, 2)->nullable();
            $table->float('subtotal', 8, 2);
            $table->float('wallet', 8, 2)->nullable();
            $table->string('promo_code')->nullable();
            $table->string('promo_discount')->nullable();
            $table->string('promo_info')->nullable();
            $table->string('promo_unavail')->nullable();
            $table->text('instruction')->nullable();
            $table->string('payoption')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shopper_orders');
    }
}
