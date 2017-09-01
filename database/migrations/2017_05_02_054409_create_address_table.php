<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cust_id');
            $table->string('name');
            $table->text('line1');
            $table->text('line2')->nullable();
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('pin');
            $table->integer('code');
            $table->string('phone');
            $table->enum('default', ['yes', 'no'])->default('no');
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
        Schema::dropIfExists('address');
    }
}
