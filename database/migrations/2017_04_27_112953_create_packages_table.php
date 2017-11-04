<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('order_id');
            $table->string('title');
            $table->enum('type', ['doc','nondoc']);
            $table->string('seller');
            $table->string('refference');
            $table->string('locker');
            $table->float('weight', 8, 2);
            $table->float('price', 8, 2);
            $table->date('received');
            $table->enum('liquid', ['0', '1'])->default('0')->nullable();
            $table->enum('sellerfeat', ['0', '1'])->default('0')->nullable();
            $table->string('status');
            $table->string('review')->nullable();
            $table->text('info')->nullable();
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
        Schema::dropIfExists('packages');
    }
}
