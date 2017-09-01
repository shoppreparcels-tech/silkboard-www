<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomingOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incoming_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('seller', 100);
            $table->string('track_no')->nullable();
            $table->string('invoice_no')->nullable();
            $table->text('notes')->nullable();
            $table->string('document');
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
        Schema::dropIfExists('incoming_orders');
    }
}
