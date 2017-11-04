<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopperRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopper_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('custid');
            $table->integer('orderid');
            $table->string('type');
            $table->integer('qty');
            $table->text('url');
            $table->string('item_num')->nullable();
            $table->string('item_name');
            $table->string('item_color')->nullable();
            $table->string('item_size')->nullable();
            $table->float('price', 8, 2);
            $table->float('totalprice', 8, 2);
            $table->text('note')->nullable();
            $table->string('unavail');
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
        Schema::dropIfExists('shopper_requests');
    }
}
