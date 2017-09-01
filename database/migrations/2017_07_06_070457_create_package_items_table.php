<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('packid');
            $table->string('item');
            $table->integer('qty');
            $table->float('price', 8, 2)->nullable();
            $table->float('total', 8, 2)->nullable();
            $table->enum('confirm_by', ['shoppre', 'customer'])->nullable();
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
        Schema::dropIfExists('package_items');
    }
}
