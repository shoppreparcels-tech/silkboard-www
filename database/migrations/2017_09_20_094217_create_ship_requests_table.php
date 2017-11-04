<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ship_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('orderid');
            $table->string('custid');
            $table->string('fullname');
            $table->text('address');
            $table->string('phone');
            $table->integer('country');
            $table->string('payoption');
            $table->string('packids');
            $table->integer('count');
            $table->float('weight', 8, 2);
            $table->float('value', 8, 2);
            $table->float('subtotal', 8, 2);
            $table->float('discount', 8, 2)->nullable();
            $table->float('packlevel', 8, 2);
            $table->float('estimated', 8, 2);
            $table->float('tax', 8, 2)->nullable();
            $table->float('coupon', 8, 2)->nullable();
            $table->float('loyalty', 8, 2)->nullable();
            $table->float('featured', 8, 2)->nullable();
            $table->float('finalamount', 8, 2);
            $table->string('paystatus');
            $table->string('shipstatus');
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
        Schema::dropIfExists('ship_requests');
    }
}
