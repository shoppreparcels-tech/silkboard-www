<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_rates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id');
            $table->decimal('min', 5, 1);
            $table->decimal('max', 5, 1);
            $table->float('amount', 8, 2);
            $table->string('courier');
            $table->string('timerange');
            $table->enum('item_type', ['doc', 'nondoc']);
            $table->enum('rate_type', ['fixed', 'multi'])->default('fixed');
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
        Schema::dropIfExists('shipping_rates');
    }
}
